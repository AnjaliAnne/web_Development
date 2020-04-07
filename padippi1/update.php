<style>
    .boxx {
    background: #fff;
    box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
    border-radius: 10px;
    }
    .title1 {
    font-weight: 700;
        margin-bottom: 7px;
        font-size: 18px;
    }
    .qqq {
    padding: 10px;
    }
    .yyy {
    width: 100%;
    margin-bottom: 7px;
    }
</style>

<section id="intr" >
    <div class="row">
        <div class="col-md-12">
            <section id="services1" class="section-bg">
                <div class="container">

                    <header >
                        <h3><b>Latest updates</b></h3>
                    </header>
                        <?php
                            include "conn.php";
                            $select = "SELECT * FROM `content_table` ORDER BY id DESC";
                            $query = mysqli_query($conn, $select) ;
                            $i=0;
                            while($row = mysqli_fetch_array($query)) 
                            {
                                if($i==7){
                                break;
                            }
                            $subject_code = $row['subject_code'];
                            $content_id = $row['content_id'];
                            $txt = $row['name'];
                            $date = $row['date'];
                            $auther_name = $row['auther_name'];
                            $result=mysqli_query($conn,"SELECT * FROM `login_table` WHERE `name`='$auther_name'");
                            $row1 = mysqli_fetch_array($result);
                            $email = $row1['email'];
                            
                        ?>
                    <div class="row">
                        <div class="yyy">
                            <div class="boxx">
                                <div class="qqq">
                                    <a href="https://www.padippi.com/KTU/frame2.php?p1=<?php echo $content_id ?>">
                                        <h4 style="color: black;" class="title1"><?php echo $subject_code." ".$txt." uploaded"; ?></h4>
                                        <div style="color: black;" class="description"><?php echo $subject_code." ".$txt." uploaded by ".$email." on ".$date; ?></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php $i++; }  ?> 
                </div>
            </section><!-- #services -->
        </div>
    </div>
</section>