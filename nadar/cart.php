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




<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php include "include/header.php"; ?>
    </head>
    <body>
        <div class="wrapper home-one single-product-page">
            <!-- HEADER AREA START -->
            <?php include 'include/navbar.php'; ?>
            <header id="header">
      
                <div id="header-right">
                    <nav id="header-nav">
                    <a id="nav-tshirt-male" href="#shop-tshirt-male"></a>
                    <a id="nav-tshirt-female" href="#shop-tshirt-female"></a>
                    <a id="nav-tshirt-any" href="#shop-tshirt-any"></a>
                    </nav>
                </div>
            </header>
            <!-- HRADER AREA END -->
            <!-- Breadcrumbs -->
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
            <!-- Breadcrumbs End -->
            <!-- Page title -->
            <div class="entry-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="entry-title">Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page title end -->
            <!-- cart page content -->
            <div class="cart-page-area">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive mb-50">
                                <div id="shopping-cart">
                                    <div class="txt-heading">Shopping Cart</div>

                                    
                                    <?php
                                    if(isset($_SESSION["cart_item"])){
                                        $total_quantity = 0;
                                        $total_price = 0;
                                    ?>	
                                    <table class="tbl-cart" cellpadding="10" cellspacing="1">
                                        <tbody>
                                        <a id="btnEmpty" href="cart.php?action=empty&p1=<?php echo $table;?>" style="background-color: #ffffff;
                                        border: #d00000 1px solid;
                                        padding: 5px 10px;
                                        color: #d00000;
                                        float: right;
                                        text-decoration: none;
                                        border-radius: 3px;
                                        margin: 10px 0px;">
                                    Empty Cart
                                    </a>
                                            <tr>
                                                <th class="product-thumbnail">Name</th>
                                                <th class="product-name">Code</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-subtotal">Discount Price</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>	
                                            <?php		
                                                foreach ($_SESSION["cart_item"] as $item){
                                                    $item_price = $item["quantity"]*$item["Final_Price"];
                                            ?>
                                            <tr>
                                                <td class="product-thumbnail">	
                                                    <img src="upload/<?php echo $item["image"]; ?>" class="cart-item-image" /> 
                                                </td>                         
                                                <td class="product-name">	
                                                    <?php echo $item["item_name"]; ?>	
                                                </td>
                                                <td class="product-quantity">	
                                                    <?php echo $item["quantity"]; ?>	
                                                </td>
                                                <td  class="product-price">	
                                                    <?php echo "₹ ".$item["Act_Price"]; ?>	
                                                </td>
                                                <td  class="product-subtotal">	
                                                    <?php echo "₹ ". number_format($item_price,2); ?>	
                                                </td>
                                                <td class="product-remove" >
                                                    <a href="cart.php?action=remove&p1=<?php echo $table;?>&code=<?php echo $item["item_name"]; ?>" class="btnRemoveAction">
                                                        <img src="icon-delete.png" alt="Remove Item" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                                $total_quantity += $item["quantity"];
                                                $total_price += ($item["Final_Price"]*$item["quantity"]);
                                                }
                                            ?>

                                            <tr>
                                                <td colspan="2" align="right">Total:</td>
                                                <td align="right"><?php echo $total_quantity; ?></td>
                                                <td align="right" colspan="2"><strong><?php echo "₹ ".number_format($total_price, 2); ?></strong></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>		
                                    <?php
                                        } else {
                                    ?>
                                    <!-- Table Content Start -->
                                    
                                    <div class="no-records">Your Cart is Empty</div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                                <div class="row">
                                        <!-- Cart Button Start -->
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="buttons-cart">
                                            <input type="submit" value="Update Cart">
                                            <a href="index.php">Continue Shopping</a>
                                            <a href="#shop-checkout">Proceed to Checkout</a>
                                        </div>
                                        
                                    </div>
                                    
                                        <!-- Cart Button Start -->
                                        <!-- Cart Totals Start -->
                                    
                        </div>
                    </div>
                </div>
                <div id="shop-checkout" style="display:none;">
                <div class="container">
                <form action="/action_page.php" onsubmit="return onCheckoutSubmit()">

                    <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Firstname">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="@gmail.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="House name, Street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Enter current city">

                        <div class="row">
                        <div class="col-50">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="Kerala">
                        </div>
                        <div class="col-50">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="Enter State">
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
                        <input type="text" id="cname" name="cardname" placeholder="Enter Name as in your Card">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="Enter Card Number">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="Enter Expiry Month">

                        <div class="row">
                        <div class="col-50">
                            <label for="expyear">Exp Year</label>
                            <input type="text" id="expyear" name="expyear" placeholder="Enter Expiry Year">
                        </div>
                        <div class="col-50">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="CCV">
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
             </div>
            </div>
            <!-- cart page content end -->
            <?php include 'include/footer.php'; ?>













        </div>
        <!-- Body main wrapper end -->


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
