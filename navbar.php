<?php
include 'function.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
   
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>SE</title>
    <style>
    body{

        overflow-x:hidden;
    }
    .grey{
        color:grey;
    }
        .btn-primary{
background:#111E6C;
        }
        #why{
            /* background: grey; */
            /* margin-top:10 px; */
        }
        i{
            color:#111E6C;
        }
a{
color:white;
}
a:hover{
color:white;
}

        #footer{
            background: #111E6C;
            color: white;
            height:100%;
            width:100%;
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
     }
    .btn{
        color:white;
        background:#111E6C;
    }
    </style>
</head>

<body>
    <!-- <h1>Samridhi Enterprises</h1> -->


    <nav class="navbar navbar-expand-lg  fixed-top navbar-right navbar-dark" style=" background: #111E6C;">
        <a class="navbar-brand ml-5" id="ankit" style="font-family: 'Lobster Two', cursive;
            font-size: 40px; color: white;
            "
            href="index.php">
            <!-- <img style="height:100px; width:100x" src="logo.jpg"> -->
        SE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:white"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav   mr-auto ">
            </ul>
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
show_navprod();
?>
         
        </div>
      </li>

                <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
                    
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="ourworks.php">Our Works</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Queries/faQ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#footer"><i style="color:white;" class="fas fa-search"></i></a>
                </li>

            </ul>

            <form class="form-inline " style="display:none">

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <a href="tel: 8650605941"><button style="background-color:#111E6C; color:white;" class="btn btn-md ">865-060-5941<i
                        class="fas fa-phone"></i></button></a>

        </div>
    </nav>


    <!-- nav bar ends -->



    <!-- style="height:400px; width:700px;" -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
