<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Padippi.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="robots" content="noindex">

  <?php
      include "head.php";
      ?>

</head>

<body>
<!--Header-->
  <?php
  include "navbar.php";
  ?>
<!--Header-->
<!--Intro Section-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Welcome <span>Students</span></h2>
          <div>
            <a href="#services" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>
<!-- #intro -->

  <div style="background: #f5f8fd;">
  <div class="container" style="padding-top: 154px;"> 
  <div id="banner1">
  </div>

    <br><br><br>
 
    <?php include "update.php"; ?> 
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
