<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samridhi enterprises |About</title>
    <style>
     .btn-primary{
background: #025AEA;
        }
        #why{
            /* background: grey; */
            /* margin-top:10 px; */
        }
        i{
            color:#025AEA;
        }
a{
color:white;
}
a:hover{
color:white;
}

        #footer{
            background: #025AEA;
            color: white;
            height:100%;
            width:100%;
        }
        .d-block{
height:600px;
}
        .products{
            height:200px;
            width:300px;
            padding-left:30px;

        }
      
        @media only screen and (min-device-width: 200px){
            #picture{
                width:100%;
            }
        }
        
        @media only screen and (min-device-width: 500px){
            #picture{
                width:350px;
            }
        }
     .card-img-top{
         height:250px;
         width:100%;
     }</style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>

<section id="top">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="top3.jfif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="top2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="top3.jpg" alt="Third slide">
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
  




<section id="aboutus" class="pt-5 mt-5">
<br>
<h3 class="text-center">
About Samridhi Enterprises</h3>
<div class="p-4"> <p>Established in the year <b>2017, Samridhi Enterprises</b> is a well-known <b>Manufacturer of Water Treatment Plant, Industrial Chemical, Dosing Pump, Industrial Chemical Pump, Magnetic Pump</b>, etc. Banking on our state-of-the-art infrastructure facility, we are able to manufacture flawless range of products. All our professionals are working in close tandem with each other leading to a smooth functioning of the firm. Being a client-oriented entity, our major focus lies in understanding and fulfilling all their requirements. Hence, we are able to attain maximum satisfaction of our clients.
</p>
<br>
<p>Under the visionary leadership of our mentor,<b> Mr. A.K Soni</b>, we have been able to occupy a good position in the market. His continuous motivation, extreme guidance, and outstanding managerial qualities allow us to gain the trust of a huge number of customers.
</p>
</div>

</section>

<section class="p-4">
<div class="p-4" style="background:#D0D0D0;">
<h3 class="text-center">
Why we?</h3>
<p>We believe that client satisfaction requires a top level of commitment to do the business. And we have the required assets and support to conduct our business operations in the right way. Being an industry leader, we are now capable to embrace all circumstances and deliver the most challenging products. 
</p><p>
The numerous reasons that help us in gaining high reputation include: </p>
<ul>
<li>Rich industrial experience</li>
<li>Ethical business practices</li>
<li>Quality range</li>
<li>Experienced workforce</li>
<li>Competitive prices</li>
<li>Timely delivery of consignments</li>
</ul></p>

</div>
</section>
<?php
include 'form.php';
echo '<br>';
include 'footer.php';
?>
</body>
</html>