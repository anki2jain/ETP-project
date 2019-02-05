<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
 
    <style>
    .w-100{
        height:50%;
    }


}
.marquee {
  height: 250px;
  width: 100%;

  overflow: hidden;
  position: relative;
}
.d-block{
height:600px;
}
.marquee div {
  display: block;
  width: 100%;
  height: 300px;

  position: absolute;
  overflow: hidden;

  animation: marquee 20s linear infinite;
}

.marquee span {
  float: left;
  width: 50%;
}


.bs-slider .bs-slider-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color:#ffffff;
    background-color: rgba(0, 0, 0, 0.40);
}

.slide_style_center {
    color:#ffffff;
    text-align: center !important;
}

.slide-text {
    left: 0;
    top: 25%;
    right: 0;
    margin: auto;
    padding: 10px;
    position: absolute;
    text-align: left;
    padding: 10px 85px;
    color:#ffffff;
    font-size:300px;
}

@keyframes marquee {
  0% { left: 0; }
  100% { left: -100%; }
}

@media only screen and (max-width: 600px) {
   .d-block{
height:300px;
}

}

    </style>
</head>
<body>
    <?php 
    include 'navbar.php';
    ?>
<section id="top">
        <!-- <img class="img-fluid" src="top.jpg"> -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="1.jpg" alt="First slide">

     

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>
  <style>
*{
	box-sizing: border-box;
}
body{
	font-family: 'Raleway', sans-serif;
	
}
header.header{
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
	transform: translateY(10%);
	h1{
		font-size: 8rem;
	text-align: center;
		margin-top: 0;
		text-transform: uppercase;
		font-weight: 900;
	}
}


         .animated {
            /*background-image: url(/css/images/logo.png);*/
            background-repeat: no-repeat;
            background-position: left top;
            /*padding-top:95px;*/
            /*margin-bottom:60px;*/
            -webkit-animation-duration: 10s;
            animation-duration: 10s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
         }
         
         @-webkit-keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
         }
         
         @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
         }
         
         .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
         }
         
         .ctext{
            text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
              font-size:70px;
          }
         @media only screen and (max-width: 600px) {


          .ctext{
              /* color:#111E6C ; */
              font-size:30px;
          }

          header.header{
	position: absolute;
	top: 20%;
	left: 0;
	width: 100%;
	transform: translateY(10%);
	h1{
		font-size: 8rem;
	text-align: center;
		margin-top: 0;
		text-transform: uppercase;
		font-weight: 900;
	}\\
}

.hide{
    display:none;
}
         }

  </style>

    <header class="header">
	<!-- <h1 class="glitched">Glitch</h1> -->
    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 class="ctext animated fadeIn" data-animation="animated flipInX">Samridhi Enterprises
                        </h1>
                        <!-- <p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p> -->
                        <!-- <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a> -->
                        <a href="#" target="_blank"  class="btn hide" data-animation="animated fadeInDown">Why We?</a>
       </div>

</header>

<div class="marquee">
  <div>
    <!-- <span ><b><h6 style="color:red">*FOR NEW PRODUCTS AND UPDATES CLICK HERE!</h6></b></span> -->
  <!-- <span style="color:red"><b><h6>*FOR NEW PRODUCTS AND UPDATES CLICK HERE!</h6></b></span> -->
  </div>
</div>

<!-- <h1 class="animated fadeIn">hiiiiiiii</h1> -->


  <section id="fact">

<div class="text-center">
    <br>
    <h2 class="" style="color:black;">
        COMPANY FACTSHEET
        <br><br><br>
        <div class="row">

 <div class="col-md-2 col-sm-12 col-xs-6">
                <div class="row">

                    <div class="col-lg-12 col-sm-4"><i class="fas fa-address-card"></i></div>
                    <div class="col-lg-12 col-sm-4 ">

                        <h6>Nature of Business</h6>
                        <h6>Manufacturer</h6>

                    </div>


                </div>
            </div>

            <br><br>
            <hr>
            <div class="col-md-2 col-sm-12 ">
                <div class="row">

                    <div class="col-lg-12 col-sm-4 col-xs-2"><i class="fas fa-user"></i></div>
                    <div class="col-lg-12 col-sm-4 col-xs-2">

                        <h6>Total number of employee </h6>
                        <h6 >Upto 10</h6>

                    </div>


                </div>
            </div>


            <br><br>
            <hr>
            <div class="col-md-2 col-sm-12 col-xs-6">
                <div class="row">

                    <div class="col-lg-12 col-sm-4 col-xs-4"><i class="fas fa-building"></i></div>
                    <div class="col-lg-12 col-sm-4 col-xs-4">

                        <h6>Year of establishment</h6>
                        <h6>2017</h6>

                    </div>


                </div>
            </div>

            <br><br>
            <hr>
            <div class="col-md-2 col-sm-12 col-xs-6">
                <div class="row">

                    <div class="col-lg-12 col-sm-4 col-xs-6"><i class="fas fa-balance-scale"></i></div>
                    <div class="col-lg-12 col-sm-4 ">

                        <h6>Legal status of firm </h6>
                        <h6>Propertiership  Firm</h6>

                    </div>


                </div>
            </div>


            <br><br>
            <hr>
           

        </div>
    </h2>
</div>

</section>


<br><br>

<section>
  
    <br><br>
  
    <section>

  <?php 
prod_list();?>

       
    </section>

    <br><br>
    <section style="background: #C0C0C0">

        <div class="row">
            <div class="col-md-4 pl-5 pt-4 pb-4">
                <img id="picture" src="people.jpg">
            </div>
            <div class="col-md-6 pl-5 pt-4 pb-4">

                <h4>Pick up a plan that's right for you</h4>
                <br>
                <h6>Our efficeincy is best</h6>
                <br>
                <a href="#" class="btn " style="background: #111E6C; color:white">Go somewhere</a>
            </div>
        </div>
   
    <br><br>

  <?php
  include 'form.php';
  
  ?>

    
    


  <?php
  include 'footer.php';
  
  ?>
</body>
</html>