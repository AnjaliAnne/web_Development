<?php
$subject_code=$_GET['p1'];
//Start connection to the localhost server
include "../conn.php"; 
$select = "SELECT * FROM `course_table` WHERE subject_code = '$subject_code' ";
$query = mysqli_query($conn, $select);
$row = mysqli_fetch_array($query);
$subject_name = $row['subject_name'];
$subject_title = $row['page_title'];
$subject_keyword = $row['page_keywords'];
$subject_discription = $row['page_discription'];
$syllabus = $row['syllabus'];
?>




<!DOCTYPE html>
<html lang="en">
<head>



  <meta charset="utf-8">
  <title><?php echo $subject_title ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo $subject_keyword ?>" name="keywords">
  <meta content="<?php echo $subject_discription ?>" name="description">

  <?php
      include "../head.php";
      ?>

</head>

<body>
  <!--Header-->
      <?php
      include "../navbar.php";
      ?>
      
     
<div style="background: #f5f8fd;">
  <div class="container" style="padding-top: 154px;"> 
<h1><b><?php echo $subject_code ?> : <?php echo $subject_name ?></b></h1>

<b><a href="<?php echo $syllabus ?>" style="margin-left: 10px; font-size: 20px;">Syllabus</a></b>
 
<h2 style="margin-top: 11px;"><b>Question Banks:</b></h2>
<?php
                            //Select all data from `updis` table
                            $select = "SELECT * FROM `content_table` WHERE type='quest' and subject_code = '$subject_code' ORDER BY id DESC";
                            $query = mysqli_query($conn, $select) ;
                            while($row = mysqli_fetch_array($query)) 
                            {
                                $txt = $row['name'];
                                $content_id = $row['content_id'];
                                //echo $image;
                                //Display image from the database
                                
                                echo '<li class="list-group-item"><a href="frame2.php?p1='.$content_id.'">'.$txt.'</a>
                                      </li>';
                        //echo '<img src="images/'.$image.'" height="150" width="150" >';
                    }
        ?>
        <br>
<h2><b>Study Notes:</b></h2>
<?php
                            //Select all data from `updis` table
                            $select = "SELECT * FROM `content_table` WHERE type='notes' and subject_code = '$subject_code' ORDER BY id DESC";
                            $query = mysqli_query($conn, $select) ;
                            while($row = mysqli_fetch_array($query)) 
                            {
                                $txt = $row['name'];
                                $content_id = $row['content_id'];
                                //echo $image;
                                //Display image from the database
                                
                                echo '<li class="list-group-item"><a href="frame2.php?p1='.$content_id.'" >'.$txt.'</a>
                                      </li>';
                        //echo '<img src="images/'.$image.'" height="150" width="150" >';
                    }
        ?>
<br>
<h2><b>Model Question Papers:</b></h2>
<?php
                            //Select all data from `updis` table
                            $select = "SELECT * FROM `content_table` WHERE type='module' and subject_code = '$subject_code' ORDER BY id DESC";
                            $query = mysqli_query($conn, $select) ;
                            while($row = mysqli_fetch_array($query)) 
                            {
                                $txt = $row['name'];
                                $content_id = $row['content_id'];
                                //echo $image;
                                //Display image from the database
                                
                                echo '<li class="list-group-item"><a href="frame2.php?p1='.$content_id.'">'.$txt.'</a>
                                      </li>';
                        //echo '<img src="images/'.$image.'" height="150" width="150" >';
                    }
        ?>
<br>

    <br>
    <?php include "../update.php"; ?> 
      <?php include "../ad.php";?>
      <?php include "../news.php";?>
      </div></div>
      <br>
      <?php
      $link = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."";
      include "../cmt_box.php";
      ?>
      <br>
    </div>
  </div>
  <!--Footer-->
    <?php
    include "../footer.php";
    ?>
  <!--Footer-->
</body>
</html>
