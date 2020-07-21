<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type"> -->
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<style>
.mySlides {display:none;}
@media only screen and (max-width: 600px) {
  .mySlides {
    height : 250px;
  }
}
@media only screen and (max-width: 900px) {
  .mySlides {
    height : 250px;
  }
}
.uu{
  background-color : black;
  width : 100%;
  height : 70px;
}
@media (max-width: 767.98px){
.xsMob {
    display: none;
}}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: .5rem;
}
*, :after, :before {
    box-sizing: border-box;
}
@media (max-width: 575.98px){
.bikeCategoryCustomMob .font20 {
    font-size: 14px;
}}
@media (max-width: 767.98px){
.bikeCategoryCustomMob .font20 {
    font-size: 16px;
}}
.motorCycleIcon, .premiumBikeIcon, .scooterIcon {
    background-repeat: no-repeat;
    background-size: 100%;
    display: inline-block;
    margin-bottom: 5px;
    height: 59px;
    margin-bottom: 35px;
}
@media (max-width: 510.98px){
.ll1{
  width: 12px;
  margin-left: -24px;
}
}
@media (max-width: 767px){
.ll1{
  width: 95px;
  margin-left: -18px;
}
}
@media (max-width: 1437px){
  .ll{
    width: 230px;
  }
}
.ll{
  width: 250px;
  height: 180px;
}
@media (max-width: 1159px){
  .ll{
    width: 170px;
    height: none;
  }
}
@media (max-width: 914px){
  .ll{
    width: 140px;
  }
}
/* @media (max-width: 793px){
  .row{
    display : none;
  }
} */
@media (max-width: 550px){
.ll {
    width: 330px;
}}

@media (max-width: 793px){
#bikesCategory1{
  display: block;
}
}
@media (max-width: 793px){
.hh{
  max-width: 100%;
}}
.nn{
  flex: 0 0 33.333333%;
  /* max-width: 33.333333%; */
  padding-right: 15px;
  padding-left: 20px;
    margin-bottom: 15px;
}
.nn1 {
    flex: 0 0 25%;
    padding-right: 15px;
    padding-left: 15px;
}
.kl{
  width: 220px;
  height: 150px;
}
@media (max-width: 1200px){
.kl{
  width: 150px;
  height: 100px;
}
}
@media (max-width: 993px){
.kl{
  width: 110px;
  height: 60px;
}
}
@media (max-width: 768.98px){
#bikesCategory2{
  padding-left: 50px;
}
.ki{
  padding-bottom: 25px;
}
}
@media (max-width: 450.98px){
#bikesCategory2{
  padding-left: 20px;
}
}
@media (max-width: 530.98px){
.bikeCategoryCustomMob{
  /* height: 160px; */
}
.motorCycleIcon, .premiumBikeIcon, .scooterIcon {
  margin-bottom: 0px;
}
}
</style>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>




<nav class="navbar navbar-dark bg-dark">
  <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#" style="font-size: 50px;margin-right: 30px;">MotorPalace.in</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
    </nav>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
  </nav>
</nav>

<!-- <div class="list" tabindex="-1" style="width: 100%; display: inline-block;">
<img src="https://s3.ap-south-1.amazonaws.com/credrwebsitebanners/1583309304452-Web-Banners-Desktp.jpg" alt="Banner" class="img-fluid">
</div> -->

<div class="w3-content w3-section" >
  <img class="mySlides" src="a.jpg" style="width:100%">
  <img class="mySlides" src="b.jpg" style="width:100%">
  <img class="mySlides" src="c.png" style="width:100%">
  <!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
</div>

<script>
  var myIndex = 0;
  
  carousel();

  

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
      
    }
    myIndex++;
    
  
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
  }
</script>
<br>
 <div class="container sectionCustomMarginTop categoryCustomWrapper">
      <h1 class="font-bold text-center sectionCustomPaddingBtm mb-0">Discover your bike</h1>
      <div class="row" id="bikesCategory">
        <div class="col-sm-4 col-4 bikeCategoryCustomMob">
          <a href="/used-bikes">
            <div class="card h-100 ">
              <div class="card-body customCardPadding text-center ripple">
                <div class="motorCycleIcon">
                <img class="ll1" src="Capture1.PNG">
                </div>
                <h5 class="card-title font20 font-semibold marginBottomTitle">Motor Cycles</h5>
                <p class="card-text xsMob">A wide range of classic commuter and cruiser bikes</p>
              </div>
            </div>
          </a>
        </div>
      <div class="col-sm-4 col-4 bikeCategoryCustomMob">
        <a href="/used-scooters">
          <div class="card h-100">
            <div class="card-body customCardPadding text-center">
              <div class="scooterIcon">
                <img class="ll1" src="Capture2.PNG">
              </div>
              <h5 class="card-title font20 font-semibold marginBottomTitle">Scooters</h5>
              <p class="card-text xsMob">Trendy, non-geared scooters for one and all</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 col-4 bikeCategoryCustomMob">
        <a href="/used-bikes">
          <div class="card h-100">
            <div class="card-body customCardPadding text-center">
              <div class="premiumBikeIcon">
                <img class="ll1" src="Capture3.PNG">
              </div>
              <h5 class="card-title font20 font-semibold marginBottomTitle">Performance Bikes</h5>
              <p class="card-text xsMob">Exclusive collection of deluxe bikes at the best price</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

<br>
  <div class="row">
    <div class="col-sm-3">
      <h2 style="padding-left: 25px;">Nearest Showrooms</h2>
      <div class="list-group">
        <a href="bike1.php" class="list-group-item">AutoPalace Edakkara</a>
        <a href="#" class="list-group-item">AutoPalace Edakkara</a>
        <a href="#" class="list-group-item">AutoPalace Edakkara</a>
        <a href="#" class="list-group-item">AutoPalace Edakkara</a>
        <a href="#" class="list-group-item">Second item</a>
        <a href="#" class="list-group-item">Third item</a>
        <a href="#" class="list-group-item">Second item</a>
        <a href="#" class="list-group-item">Third item</a>
      </div>
    </div>

    <div class="col-sm-9">
      <div class="container ">
        <h1 class=" text-center ">Popular Bikes</h1>
        <div class="row" id="bikesCategory1">
          <div class="nn hh">
            <a data-toggle="modal" data-target=".bd-example-modal-xl">
              <div class="card h-100 ">
                <div class="card-body customCardPadding text-center ripple">
                  <div class="motorCycleIcon">
                  <img class="ll" src="download1.jpg" style="vertical-align: baseline;">
                  </div>
                  <h5 style="margin-bottom: 0px; text-align: left;" >RC 125</h5>
                  <p style="margin-bottom: 0px; text-align: left;">Price: 165000</p>
                  <p style="margin-bottom: 0px; text-align: left;">Year: 2019</p>
                  <p style="margin-bottom: 0px; text-align: left;">Location: AutoPalace Edakkara</p>
                  
                </div>
              </div>
            </a>
          </div>
          <div class="nn hh">
            <a data-toggle="modal" data-target=".bd-example-modal-xl">
              <div class="card h-100">
                <div class="card-body customCardPadding text-center">
                  <div class="scooterIcon">
                    <img class="ll" src="ewww.jpg" style="vertical-align: baseline;">
                  </div>
                  <h5 style="margin-bottom: 0px; text-align: left;" >YAMAHA R15</h5>
                  <p style="margin-bottom: 0px; text-align: left;">Price: 125000</p>
                  <p style="margin-bottom: 0px; text-align: left;">Year: 2019</p>
                  <p style="margin-bottom: 0px; text-align: left;">Location: AutoPalace Edakkara</p>
                </div>
              </div>
            </a>
          </div>
          <div class="nn hh">
            <a data-toggle="modal" data-target=".bd-example-modal-xl">
              <div class="card h-100">
                <div class="card-body customCardPadding text-center">
                  <div class="premiumBikeIcon">
                    <img class="ll" src="downloadvvv.jpg" style="vertical-align: baseline;">
                  </div>
                  <h5 style="margin-bottom: 0px; text-align: left;" >TVS Apachae</h5>
                  <p style="margin-bottom: 0px; text-align: left;">Price: 65000</p>
                  <p style="margin-bottom: 0px; text-align: left;">Year: 2017</p>
                  <p style="margin-bottom: 0px; text-align: left;">Location: AutoPalace Edakkara</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row" id="bikesCategory1">
          <div class="nn hh">
            <a data-toggle="modal" data-target=".bd-example-modal-xl">
              <div class="card h-100 ">
                <div class="card-body customCardPadding text-center ripple">
                  <div class="motorCycleIcon">
                  <img class="ll" src="ggg.jpg" style="vertical-align: baseline;">
                  </div>
                  <h5 style="margin-bottom: 0px; text-align: left;" >Pulser 150</h5>
                  <p style="margin-bottom: 0px; text-align: left;">Price: 65000</p>
                  <p style="margin-bottom: 0px; text-align: left;">Year: 2018</p>
                  <p style="margin-bottom: 0px; text-align: left;">Location: AutoPalace Edakkara</p>
                  
                </div>
              </div>
            </a>
          </div>
          <div class="nn hh">
            <a data-toggle="modal" data-target=".bd-example-modal-xl">
              <div class="card h-100">
                <div class="card-body customCardPadding text-center">
                  <div class="scooterIcon">
                    <img class="ll" src="downloadxx.jpg" style="vertical-align: baseline;">
                  </div>
                  <h5 style="margin-bottom: 0px; text-align: left;" >CBF Stunner</h5>
                  <p style="margin-bottom: 0px; text-align: left;">Price: 45000</p>
                  <p style="margin-bottom: 0px; text-align: left;">Year: 2016</p>
                  <p style="margin-bottom: 0px; text-align: left;">Location: AutoPalace Edakkara</p>
                </div>
              </div>
            </a>
          </div>
          <div class="nn hh">
            <a data-toggle="modal" data-target=".bd-example-modal-xl">
              <div class="card h-100">
                <div class="card-body customCardPadding text-center">
                  <div class="premiumBikeIcon">
                    <img class="ll" src="gge.jpg" style="vertical-align: baseline;">
                  </div>
                  <h5 style="margin-bottom: 0px; text-align: left;" >Mastero Edge</h5>
                  <p style="margin-bottom: 0px; text-align: left;">Price: 65000</p>
                  <p style="margin-bottom: 0px; text-align: left;">Year: 2018</p>
                  <p style="margin-bottom: 0px; text-align: left;">Location: AutoPalace Edakkara</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
   <br>

      <div class="container " style="margin-bottom: 20px;">
        <h1 style="margin-top: 24px;" class=" text-center ">Search by brands</h1>
        <div class="row" id="bikesCategory2" >
          <div class="row ki" id="bikesCategory2" style="padding-right: 25px;">
            <div class="bikeCategoryCustomMob nn1 hh">
              <a data-toggle="modal" data-target=".bd-example-modal-xl">
                <div class="card h-100 ">
                  <div class="card-body customCardPadding text-center ripple">
                    <div class="motorCycleIcon">
                      <img class="ll kl" src="download.png" style="vertical-align: baseline;">
                    </div>
                    <h5 style="margin-bottom: 0px;" >KTM</h5>
                    
                  </div>
                </div>
              </a>
            </div>
            <div class="bikeCategoryCustomMob nn1 hh">
              <a href="/used-scooters">
                <div class="card h-100">
                  <div class="card-body customCardPadding text-center">
                    <div class="scooterIcon">
                      <img class="ll kl" src="downloadd.jpg" style="vertical-align: baseline;"> 
                    </div>
                    <h5 style="margin-bottom: 0px;" >YAMAHA</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row" id="bikesCategory2">
            <div class="bikeCategoryCustomMob nn1 hh">
              <a href="/used-bikes">
                <div class="card h-100">
                  <div class="card-body customCardPadding text-center">
                    <div class="premiumBikeIcon">
                      <img class="ll kl" src="downloadb.png" style="vertical-align: baseline;">
                    </div>
                    <h5 style="margin-bottom: 0px;" >BAJAJ</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="bikeCategoryCustomMob nn1 hh">
              <a href="/used-bikes">
                <div class="card h-100">
                  <div class="card-body customCardPadding text-center">
                    <div class="premiumBikeIcon">
                      <img class="ll kl" src="Captureff.PNG" style="vertical-align: baseline;">
                    </div>
                    <h5 style="margin-bottom: 0px;" >HERO</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <br>
        <div class="row" id="bikesCategory2">
          <div class="row ki" id="bikesCategory2" style="padding-right: 25px;">
            <div class="bikeCategoryCustomMob nn1 hh">
              <a data-toggle="modal" data-target=".bd-example-modal-xl">
                <div class="card h-100 ">
                  <div class="card-body customCardPadding text-center ripple">
                    <div class="motorCycleIcon">
                      <img class="ll kl" src="Captureqq.PNG" style="vertical-align: baseline;">
                    </div>
                    <h5 style="margin-bottom: 0px;" >HONDA</h5>
                    
                  </div>
                </div>
              </a>
            </div>
            <div class="bikeCategoryCustomMob nn1 hh">
              <a href="/used-scooters">
                <div class="card h-100">
                  <div class="card-body customCardPadding text-center">
                    <div class="scooterIcon">
                      <img class="ll kl" src="Capturemm.PNG" style="vertical-align: baseline;">
                    </div>
                    <h5 style="margin-bottom: 0px;" >TVS</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row" id="bikesCategory2">
            <div class="bikeCategoryCustomMob nn1 hh">
              <a href="/used-bikes">
                <div class="card h-100">
                  <div class="card-body customCardPadding text-center">
                    <div class="premiumBikeIcon">
                      <img class="ll kl" src="downloadpp.png" style="vertical-align: baseline;">
                    </div>
                    <h5 style="margin-bottom: 0px;FONT-SIZE: 18PX;" >ROYAL ENFFIELD</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="bikeCategoryCustomMob nn1 hh">
              <a href="/used-bikes">
                <div class="card h-100">
                  <div class="card-body customCardPadding text-center">
                    <div class="premiumBikeIcon">
                      <img class="ll kl" src="Capturebb.PNG" style="vertical-align: baseline;">
                    </div>
                    <h5 style="margin-bottom: 0px;" >SUZUKI</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
<br><br>
<div class="uu">
<h4 class="font-bold text-center sectionCustomPaddingBtm mb-0" style="padding-top: 18px;color: white;">Copyright © MotoPalace Team</h4>
</div>



<!-- Extra large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button> -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <h1 class="text-center"> KTM RC125</h1>
    </div>
  </div>
</div>



</body>
</html>