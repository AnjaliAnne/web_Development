<!DOCTYPE html>
<html lang="en">
<head>

  <?php include "google_ad.php"; ?>

  <meta charset="utf-8">
  <title>Padippi.com|Disclaimer</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="robots" content="noindex">

  <?php include "head.php"; ?>

</head>

<body>
  <!--Header-->
    <?php
    include "navbar.php";
    ?>
  <!--Header-->   
  <div style="background: #f5f8fd;">
    <div class="container" style="padding-top: 154px;">
      <h1><b>About Us</b></h1>
      Welcome to padippi.com, your number one source for all things [product, ie: Study materials, PPT presentations, PDFs, Project Assists , Previous Year Solved Question Papers, etc]. We're dedicated to giving you the very best of Study materials, with a focus on [three characteristics, ie: dependability, customer service and uniqueness.] Founded in 2019 by Interns of Jyothi Engineering college, padippi.com has come a long way from its beginnings in a class room as a mini project.<br>
      When padippi.com first started out, our passion for engineering and its toughness to crack drove us to do intense research on it, and give you the impetus to turn hard work and inspiration into to a booming online data-store. We now serve customers all over kerala, and are thrilled to be a part of the quirky, eco-friendly, wing of the technical industry.<br>
      We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.<br><br>
    
      <?php include "ad.php";?>
      <?php include "news.php";?>
      </div></div>
      <br>
      <?php
      $link = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."";
      include "cmt_box.php";
      ?>
      <br>
    </div>
  </div>
  <!--Footer-->
    <?php
    include "footer.php";
    ?>
  <!--Footer-->
</body>
</html>
