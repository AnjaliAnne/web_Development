<!doctype html>
<!-- <html class="no-js" lang="en"> -->
    <head>
        
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
        <style>
            .final{
                padding: 20px 30px;
                text-transform: capitalize;
            }
        </style>    -->
    </head>
    <body>
        <div class="container-fluid">
        <div class="wrapper home-one">
           
            <div class="final">
                <?php 
                    session_start();
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                        

                    require_once("config.php");

                    if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
                    {
                    // 
                    $yourName = $conn->real_escape_string($_POST['your_name']);
                    $phone = $conn->real_escape_string($_POST['phone']);
                    $yourEmail = $conn->real_escape_string($_POST['your_email']);
                    $yourAddress = $conn->real_escape_string($_POST['address']);
                    $yourCity = $conn->real_escape_string($_POST['city']);
                    
                    echo "entered details are: ";
                    echo nl2br("$yourName \n");
                    echo nl2br("$yourAddress \n");
                    echo nl2br("$phone \n");
                    foreach ($_SESSION["cart_item"] as $item){
                        $item_name = $item["item_name"];
                        $item_qua = $item["quantity"];
                        $price = $item["Final_Price"];
                        $item_price = $item["quantity"]*$item["Final_Price"];
                        $list .= $item_name.'('.$item_qua.')'.'<br>';
                        $list2 .= $item_name.'&nbsp&nbsp&nbsp'.$item_qua.'&nbsp&nbsp&nbsp'.$price.'&nbsp&nbsp&nbsp'.$item_price.'<br>';
                        $total+=$item["quantity"]*$item["Final_Price"];
                    }
                    // $list .= "Total Price: ".$total;
                    $list2 .= "Total Price: ".$total.'<br>';
                    echo $list2;

                    $yourProducts = $list;
                    $yourPrice = $total;
                    $currentdate = date("Y/m/d");

                    $sql="INSERT INTO contact_form_info (name,phone, email, address, city, products, price, date,status) VALUES ('".$yourName."','".$phone."','".$yourEmail."', '".$yourAddress."', '".$yourCity."', '".$yourProducts."','".$yourPrice."','".$currentdate."','".Pending."')";

                    if($result = $conn->query($sql)){
                        require_once("contact_mail.php");
                        echo "Thank you! We will contact you soon";
                        session_destroy();
                    }
                    else
                    {
                    die('There was an error running the query [' . $conn->error . ']');
                    }
                    }

                
                    
                ?>
                <br>
                <button class="btn" style="color:white">
                <a href="index.php" style="color:white">Continue Shopping</a>
                </button>
            </div>
        </div>
        </div>

    </body>
</html>