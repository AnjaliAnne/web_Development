  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">

            <div class="row">

                <div class="col-sm-5">

                  <div class="footer-info">
                    <h3>Padippi.com</h3>
                      <p style="color: #212529; font-size: 14px;">
                        Welcome to padippi.com, your number one source for all study related products. We're dedicated to giving you the very best of Study materials, with a focus on 
                        three characteristics, ie: dependability, customer service and uniqueness.                      </p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>By subscribing to this mailing list, you will receive our latest updates through mail and also we will providing you with information relevant to our policies and conditions. You can unsubscribed from this mailing list whenever you needed. We will process your personal data in line with our privacy policy.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                  </div>

                </div>

                <div class="col-sm-7" style="padding-left: 30px;">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="https://www.padippi.com">Home</a></li>
                      <li><a href="https://www.padippi.com/about_us.php">About us</a></li>
                      <li><a href="https://www.padippi.com/disclaimer.php">Disclaimer</a></li>
                      <li><a href="https://www.padippi.com/privacy_policy.php">Privacy Policy</a></li>
                      <li><a href="https://www.padippi.com/terms.php">Terms & conditions</a></li>
                      <li><a href="https://www.padippi.com/publishers/">Publisher Log In</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                       
                      <strong>Phone:</strong> +918086713433<br>
                      <strong>Phone:</strong> +918437771301<br>
                      <strong>Email:</strong> technoclubsolutions@gmail.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-4">

            <div class="form">
              
              <h4>Send us a message</h4>
              <p>Contents added in this site to our best knowledge are genuine datas from reputed lectures and professionals, some of the data are also been taken from our friends too. If found any corrections or copyright issues please let us know.</p>
              <form method="post" action="#" >
              
                <input placeholder="Name" name="sender" class="form-control"><br>

                <input placeholder="Email" name="senderEmail" class="form-control"><br>

                <input placeholder="Subject" name="sendersubject" class="form-control"><br>

                <textarea placeholder="Message" rows="5" cols="20" name="message" class="form-control"></textarea><br>

                <input type="submit" name="submit1" value="Send Message">
              </form>
              <?php

if($_POST["submit1"]) {
    $recipient="padippiboy@padippi.com";
    $subject=$_POST["sendersubject"];
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

   $e = mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
   $thankYou="<p>Something went wrong! please check your email.</p>";
    if($e == 1){
      $thankYou="<p>Thank you! Your message has been sent.</p>";
    }
    echo $thankYou;
}

?>
            </div>

          </div>
 
          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        Custom Designed by <a href="#">Technoclub solutions</a>
        <a href="//www.dmca.com/Protection/Status.aspx?ID=6e5a7295-5d74-4711-afbb-a59935ee538e" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca-badge-w100-5x1-09.png?ID=6e5a7295-5d74-4711-afbb-a59935ee538e"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script> 
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script> 
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>