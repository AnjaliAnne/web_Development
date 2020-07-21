<!DOCTYPE html>
<html lang="en">
<head>

<?php include "google_ad.php"; ?>

  <meta charset="utf-8">
  <title>Padippi.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="padippi, KTU, notes, question bank, question paper, solved, model question paper" name="keywords">
  <meta content="padippi.com is a website which aims in helping all sort of students for earning money and acheiveing better grades in their semester examinations. We collect notes, solved question papers from various students and deliver it to required students. We also share the revenue with the publishers who give contents to us in a fixed interval" name="description">

  <meta property="og:url" content="https://padippi.com">
  <meta property="og:site_name" content="Padippi.com">
  <meta property="article:tag" content="ktu notes">
  <meta property="article:tag" content="ktu syllabus">
  <meta property="article:tag" content="ktu question banks">
  <meta property="article:tag" content="ktu study materials">
  <meta property="article:tag" content="ktu class notes">
  <meta property="article:tag" content="ktu plus two notes">
  <meta property="article:section" content="ktu notes">
  <meta property="article:section" content="plus two notes">
  
  <meta property="og:locale" content="en_IN">
  <meta property="og:type" content="website">
  <meta content="index, follow" name="robots">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <meta name="msvalidate.01" content="8EBDFEEF68E0BACCF4DB19C620463F5F" />
  <meta content="all" name="audience">
  <meta content="India" name="geo.placename">
  <meta content="Padippi Boy" name="author">
  <meta content="Padippi Boy" name="owner">
  <meta content="technoclubsolutions@gmail.com" name="email">
  <meta content="general" name="rating">
  <meta content="IN" name="geo.country">
  <meta content="global" name="distribution">

  <?php
    include "head.php";
  ?>

</head>

<body>
<!--Header-->
  <?php
  include "navbar.php";
  ?>
  <div style="background: #f5f8fd;">
  <div class="container" style="background: #f5f8fd;">
    <!--Intro Section-->
      <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
          <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
              <h2>Research <span>Replenish</span>
                  <br><span>Renovate </span>Redefine</h2>
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
    <!--Intro Section-->
    <?php include "update.php"; ?> 
    
    <div class="row" style="margin-bottom: -35px;">
      <div class="col-md-12">
        <section id="services" class="section-bg">
          <div class="container">
            <header class="section-header">
              <h3>Universities</h3>
              <p>We focus on some Universities like KTU,CU,MG etc. Furthur more will be added in future with your support.</p>
            </header>
            <div class="row">
              <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <a href="KTU/"> 
                    <div style="background: #fceef3;margin: 0 auto;margin-bottom: 10px;width: 90px;"><b style="font-size: 40px;color: black;">KTU</b></div>
                    <h4 style="color: black;" class="title">APJ Abdul kalam Technological University</h4>
                    <p style="color: black;" class="description">APJ Abdul Kalam Technological University, also known as KTU is a state university established by the Government of Kerala.</p>
                  </a>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                <a href="error.php"> 
                  <div style="background: #fff0da;margin: 0 auto;margin-bottom: 10px;width: 92px;"><b style="font-size: 40px;color: black;">UOC</b></div>             
                  <h4 style="color: black;" class="title">University Of Calicut, Thenjipalam</h4>
                  <p style="color: black;" class="description">The University of Calicut is the largest University in Kerala. Established in the year 1968, it is the second university to be set up in Kerala.</p>
                </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                <a href="error.php"> 
                <div style="background: #e6fdfc;margin: 0 auto;margin-bottom: 10px;width: 113px;"><b style="font-size: 40px;color: black;">DHSE</b></div>
                  <h4 style="color: black;" class="title">Directorate of Higher Secondary Education</h4>
                  <p style="color: black;" class="description">The Board of Higher Secondary Education Kerala, located on the Housing Board Building in Santhi Nagar, Thiruvananthapuram, Kerala</p>
                  </a>
                </div>
              </div>

            </div>

          </div>
        </section><!-- #services -->
      </div>
    </div>

    <?php include "ad.php";?>
    <?php include "news.php";?>
      </div></div>

    <?php
      $link = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."";
      include "cmt_box.php";
    ?>
    <br>
    </div>
    <!--Footer-->
    <?php
    include "footer.php";
    ?>
  </div></div>
</body>
</html>
