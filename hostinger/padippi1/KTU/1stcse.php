<!DOCTYPE html>
<html lang="en">
<head>

<?php include "../google_ad.php"; ?>

  <meta charset="utf-8">
  <title>ktu first year notes, question papers, solved question banks</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ktu first year notes, question papers, solved question banks for mat101,mat102, pht100, pht110, cyt100, est100, est110, est120, est130, hun101, hun102, est102" name="keywords">
  <meta content="ktu first year notes, question papers, solved question banks for mat101,mat102, pht100, pht110, cyt100, est100, est110, est120, est130, hun101, hun102, est102" name="description">

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
      <h1><b>1st Year Subjects:</b></h1>
      <h2><b>Main Subjects:</b></h2>
      <br>
      <ul>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>MAT101:</b> Linear Algebra & Calculus</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>MAT102:</b> Vector Calculus, Differential Equations & Transformations</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>PHT100:</b> Engineering Physics A</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>PHT110:</b> Engineering Physics B</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>CYT100:</b> Engineering Chemistry</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>EST100:</b> Engineering Mechanics</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>EST110:</b> Engineering Graphics</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>EST120:</b> Basics of Civil & Mechanical Engineering</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>EST130:</b> Basics of Electrical & Electronics Engineering</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>HUN101:</b> Life Skills</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>HUN102:</b> Professional Communication</li></a>
        <li class="list-group-item" style="margin-bottom: 2px;"><a href="../error.php"><b>EST102:</b> Programming in C</li></a>
      </ul> 
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
