<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["p1"])) {
    $table = $_GET["p1"];
}
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM $table WHERE item_name='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["item_name"]=>array('item_name'=>$productByCode[0]["item_name"], 'Current_Stock'=>$productByCode[0]["Current_Stock"], 'quantity'=>$_POST["quantity"], 'Act_Price'=>$productByCode[0]["Act_Price"],'Final_Price'=>$productByCode[0]["Final_Price"], 'image'=>$productByCode[0]["image"], 'Discount'=>$productByCode[0]["Discount"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["item_name"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["item_name"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
                } 
                else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
            } 
            else {
                $_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>










<!DOCTYPE html>
<meta charset="utf-8">

<!--
 Copyright 2018 Google Inc. All Rights Reserved.

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

      http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

<html>
  <head>
    <!-- <link rel="stylesheet" href="css/gpay.css"> -->
    <?php include "include/header.php"; ?>
  </head>
  <body>
    <div class="wrapper home-one single-product-page">
    <?php include 'include/navbar.php'; ?>
    
    <header id="header">
      <div id="header-right">
        <nav id="header-nav">
          <a id="nav-tshirt-male" href="#shop-tshirt-male">Male Shirt</a>
          <a id="nav-tshirt-female" href="#shop-tshirt-female">Female Shirt</a>
          <a id="nav-tshirt-any" href="#shop-tshirt-any">Any Shirt</a>
        </nav>
      </div>
    </header>
                    <div class="breadcrumbs-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="woocommerce-breadcrumb">
                                <a href="index.php">Home</a>
                                <span class="separator">/</span> Cart
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="entry-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="entry-title">Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
                    <div id="content">
                    <div id="shop-tshirt">
                        

                        <div class="detail" has-content="">

                        


                        

                        <div id="buy-buttons">
                            <div responsive="" id="buy-now" visible="">
                            <a href="#shop-checkout" class="btn">Buy Now</a>
                            </div>
                        </div>

                        </div>
                    </div><!--/#shop-tshirt-->

                    <div id="shop-checkout" style="display:none;">
                        <div class="container">
                        <form action="/action_page.php" onsubmit="return onCheckoutSubmit()">

                            <div class="row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="john@example.com">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="New York">

                                <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">

                                <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                                </div>
                            </div>

                            </div>
                            <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                            </label>
                            <input type="submit" value="Continue to checkout" class="btn">
                        </form>
                        </div>
                    </div><!--/#shop-checkout-->

                    <div id="shop-success" style="display:none;">
                        <h1>Success</h1>
                        <p>Thank you for buying a shirt.</p>
                        <p>
                        Choose Another?
                        <a href="#shop-tshirt-male">Male Shirt</a>
                        <a href="#shop-tshirt-female">Female Shirt</a>
                        <a href="#shop-tshirt-any">Any Shirt</a>
                        </p>
                    </div><!--/#shop-successful-purchase-->

                    </div><!--/#content-->
    </div>
    <!-- including polyfills for older browsers -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="js/shop.js"></script>
    <script src="js/index.js"></script>

    <!-- include script for google pay with onload handler -->
    <script async
      src="https://pay.google.com/gp/p/js/pay.js"
      onload="onGooglePayLoaded()">
    </script>
  </body>
</html>
