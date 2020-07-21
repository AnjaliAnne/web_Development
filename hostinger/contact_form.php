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
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nadar || Superstores</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/css-plugins-call.css">
        <link rel="stylesheet" href="css/bundle.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/colors.css">
        <link href="style.css" type="text/css" rel="stylesheet" />
        <!-- <link href="assets/css/stylig.css" rel="stylesheet"/> -->
        <style>
            .shopBtn {min-height: 34px;font-size: 14px;font-weight: bold;line-height: 34px;text-align: center;color: #fff;border-radius: 2px;background: #f89406;display:inline-block;padding:0 12px;border:0;}
            .defaultBtn {min-height: 34px;font-size: 14px;font-weight: bold;line-height: 34px;text-align: center;border-radius: 2px;display:inline-block;padding:0 12px;color: #666;text-decoration: none;background: #e6e6e6;border:0;}
            .shopBtn:hover {color: #fff; text-decoration:none; background:#F86706}
            .gotop {background-color: #000000;display: none;position: fixed;bottom: 30px;right: 30px;padding: 0px 10px 5px;color: #fff;text-decoration: none;font-size: 30px;line-height: 34px;}
            .gotop:hover {color: #fff;text-decoration: none;-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;}
            #gototop{margin-top:1px;}
            .thumbnail .btn{ border-radius: 0 0 0 0;}
            .thumbnail h4{line-height:42px}
            .thumbnail img{
                min-height: 100px;
                max-height: 171px;
            }
            .thumbnail:hover {border: 1px solid #CACACA;}
            .thumbnail>a{display:block; text-align:center}
            .thumbnail h5,.thumbnail p{text-align:center}
            .thumbnail{position:relative;}
            .thumbnail>a.overlay, .thumbnail>a.zoomTool {display:none;}
            
            .thumbnails {
                margin-left: -20px;
                list-style: none;
                *zoom: 1;
            }
            
            .thumbnails:before,
            .thumbnails:after {
                display: table;
                line-height: 0;
                content: "";
            }
            
            .thumbnails:after {
                clear: both;
            }
            
            .row-fluid .thumbnails {
                margin-left: 0;
            }
            
            .thumbnails > li {
                float: left;
                margin-bottom: 20px;
                margin-left: 20px;
            }
            
            .thumbnail {
                display: block;
                padding: 4px;
                line-height: 20px;
                border: 1px solid #ddd;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                        border-radius: 4px;
                -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
                -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
                        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
                -webkit-transition: all 0.2s ease-in-out;
                -moz-transition: all 0.2s ease-in-out;
                    -o-transition: all 0.2s ease-in-out;
                        transition: all 0.2s ease-in-out;
            }
            
            a.thumbnail:hover,
            a.thumbnail:focus {
                border-color: #0088cc;
                -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
                -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
                        box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
            }
            
            .thumbnail > img {
                display: block;
                margin-right: auto;
                margin-left: auto;
            }
        </style>

    </head>
    <body>

        <!-- Body main wrapper start -->
        <div class="wrapper home-one">
            <!-- HEADER AREA START -->
            <?php include "include/nav.php";?>
            <div class="breadcrumbs-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="woocommerce-breadcrumb">
                                <a href="index.php">Home</a>
                                <span class="separator">/</span> Shop
                                <span class="separator">/</span> checkout
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-page-wraper">
                <div class="container">
                        
                <div class="col shop-content">
                <div class="row">
                    <div class="col">
                        <form name="contact-form" action="get_response.php" method="post" id="contact-form">
                            <h3>Billing Address</h3>
                            <div class="form-group">
                                <label for="Name"><i class="fa fa-user"></i>Name</label>
                                <input type="text" id="fname" name="your_name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Name"><i class="fa fa-user"></i>Contact Number</label>
                                <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><i class="fa fa-envelope"></i> Email address</label>
                                <input type="email" class="form-control" name="your_email" placeholder="@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="House name, Street">
                            </div>
                            <div class="form-group">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="Enter current city">
                            </div>
                            <button type="submit" class="btn" name="submit" value="Submit" id="submit_form" style="color:white">submit</button>
                        </form>
                        <div class="response_msg"></div>
                    </div>
                </div>

            </div>      
                                        <!-- Cart Button Start -->
                                        <!-- Cart Totals Start -->
                                    
                </div>
            </div>
        </div>
            <?php include "include/footer.php";?>
            <!-- QUICKVIEW PRODUCT START -->
            
            <!-- QUICKVIEW PRODUCT END -->
        </div>
        <!-- Body main wrapper end -->


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- jQuery Local -->
        <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')</script>

        <!-- Popper min js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap min js  -->
        <script src="js/bootstrap.min.js"></script>
		<!-- nivo slider pack js  -->
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <!-- All plugins here -->
        <script src="js/plugins.js"></script>
        <!-- Main js  -->
        <script src="js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
