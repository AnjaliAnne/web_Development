<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nadar || Orders</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap CSS version 4.1.3 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <!-- Datatable stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

       <?php include "include/header.php"; ?>
       <link rel="stylesheet" href="css/admincss.css">

       <style>
           td,th{
            border-style: ridge;
            border-width: thin;
           }

            .unlis {
            margin: 0;
            padding: 0;
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 71%);
            }

            .unlis li {
            list-style: none;
            margin: 0 15px;
            }

            .unlis li a {
            position: relative; 
            display: block;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 63px;
            background: #333;
            border-radius: 50%;
            font-size: 30px;
            color: #fff;
            transition: .5s;
            }

            .unlis li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #fff;
            transition: .5s;
            transform: scale(.9);
            z-index: -1;
            }

            .unlis li a:hover::before {
            transform: scale(1.1);
            box-shadow: 0 0 15px #58dffd;
            }

            .unlis li a:hover {
            color: #58dffd;
            box-shadow: 0 0 5px #58dffd;
            text-shadow: 0 0 5px #58dffd;
            }
                 
                        

            .ulis {
            margin: 0;
            padding: 0;
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

            .ulis li {
            list-style: none;
            margin: 0 15px;
            }

            .ulis li a {
            position: relative; 
            display: block;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 63px;
            background: #333;
            border-radius: 50%;
            font-size: 30px;
            color: #fff;
            transition: .5s;
            }

            .ulis li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #fff;
            transition: .5s;
            transform: scale(.9);
            z-index: -1;
            }

            .ulis li a:hover::before {
            transform: scale(1.1);
            box-shadow: 0 0 15px #58dffd;
            }

            .ulis li a:hover {
            color: #58dffd;
            box-shadow: 0 0 5px #58dffd;
            text-shadow: 0 0 5px #58dffd;
            }
            .cntnt {
                margin-left: 25px;
                font-size: 16px;
                padding: 0px 0px;
            }
            
                    


       </style>
    </head>
    <body>
    <?php
    if(!empty($_GET["p1"])) {
        $id1 = $_GET["p1"];
        require_once("config.php");
        $ww = "UPDATE contact_form_info SET status ='Completed' WHERE id = $id1";
        mysqli_query($conn,$ww);
    }
    ?>
        <!-- Body main wrapper start -->
        <div class="wrapper home-one single-product-page" style="min-height:600px">
            <?php include "include/adnav.php";?>
                <!-- Page title -->
                <div class="entry-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="entry-title">Orders</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register-page-area">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="cntnt">
                        <?php // ALL REPORTS-STAFF
                        require_once("config.php");
                        $query = mysqli_query($conn,"select id,name,phone,email,address,city,products,price,date,status from contact_form_info order by id desc");
                        if(mysqli_num_rows($query)>0){
                            $id=1;
                    ?>
                           
                            <table id="report_orders">
                                <thead>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Orders</th>
                                    <th>Amount</th>
                                    <th>Date Order Placed</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>               
                                <?php while($row = mysqli_fetch_assoc($query)){ ?>
                                    <tr>
                                        <td><?php echo $id;
                                        $id++;?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['city']; ?></td>
                                        <td><?php echo $row['products']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><a href="orders.php?p1=<?php echo $row['id'];?>"><?php echo $row['status']; ?></a></td>
                                    </tr>
                                    <?php        }  ?>
                                </tbody>
                            </table> 
                            <?php   }   ?>
                        </div>
                    </div> <!-- row -->
                </div>
            </div>
        </div>
        <?php include "include/adfooter.php"; ?>
        
        <!-- Body main wrapper end -->


        <!-- jQuery CDN -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>
        <!-- jQuery Local -->
        <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')</script>

        <!-- Popper min js -->
        <script src="js/popper.min.js"></script>
        
        <!-- All plugins here -->
        <script src="js/plugins.js"></script>
        <!-- Main js  -->
        <!-- Datatable Javascrpit -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

        <script>
            $(document).ready(function() {
                $('#report_orders').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
        </script>


        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
    </html>


