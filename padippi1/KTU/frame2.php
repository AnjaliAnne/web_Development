<!DOCTYPE html>
<html lang="en">
<head>

<?php include "../google_ad.php"; ?>

  <meta charset="utf-8">
  <title>Padippi.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="robots" content="noindex">


  <?php
      include "../head.php";
      ?>

</head>

<body>
  <!--Header-->
    <?php
    include "../navbar.php";
    ?>
  <!--Header-->
  <div style="background: #f5f8fd;">
    <div class="container" style="padding-top: 154px;">
      <?php
            $content_id=$_GET['p1'];
            include "../conn.php"; 
            $select = "SELECT * FROM `content_table` WHERE content_id='$content_id'";
            $query = mysqli_query($conn, $select) ;
            while($row = mysqli_fetch_array($query)) 
            {
                $link = $row['link'];
                $name = $row['name'];
                $auther_name = $row['auther_name'];
            }
            $select = "SELECT * FROM `login_table` WHERE name='$auther_name'";
            $query = mysqli_query($conn, $select) ;
            while($row = mysqli_fetch_array($query)) 
            {
                $email = $row['email'];
            }
            ?>

      <h1><b><?php echo $name; ?></b></h1>
      <div style="padding-left: 28px;">
        <iframe alt="please wait" src="https://drive.google.com/file/d/<?php echo "$link";?>/preview" style="height: 420px";></iframe><br>
          <a href="https://drive.google.com/file/d/<?php echo "$link";?>/view"><button type="button" class="btn btn-primary" >Download</button></a>
      </div>
          <br><br>
          Created by: <b><?php echo "$auther_name";?></b><br>
          Email: <b><?php echo "$email";?></b><br>
          Content id: <b><?php echo "$content_id";?></b><br><br>
          <br>
      <?php include "../update.php"; ?> 
      <?php include "../ad.php";?>
      <?php include "../news.php";?>
      </div></div>
      <br>
      <?php
      $link = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?p1=".$content_id;
      include "../cmt_box1.php";
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
