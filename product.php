<?php 
if(!isset($_GET["prod"]))
header('Location : index.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->


    <title>Samridhi Enterprises!</title>
    <style>

        body {
  /* background-color:#1d1d1d !important; */
  font-family: "Asap", sans-serif;
  /* color:#989898; */
  margin:10px;
  font-size:16px;
}

#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}

.parallax {
  
  /* background-image: url("bg14.jpg"); */
  background-image: linear-gradient(to bottom right,#ffffff,#111E6C,#111E6c);
  
  min-height: 400px; 

  width:100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.centered {
    color:#ffffff;
  padding-top:10%;
}

</style>
   
</head>

<body>

    <?php
    include 'navbar.php';
    ?>
    <br><br>
    
    <section>
<div class="parallax"><h1 class="text-center  centered"><?php 
show_prodnm(); ?>

</h1></div>
<?php
    // echo '<div class="mt-4">';
// include 'ss.php';
// echo '</div>';
?>   
        <div class="container">
            <h1 class="pt-5 mt-5">
                <form action="#" class="form-inline">
<!-- <label for=""></label> -->
                    <input style="width:250px;" type="text" class="form-control">
               <button class="btn " >Search</button>
                </form>

                 <?php
                 
    show_subprod();
    ?>
      

        </div>
    </section>



<div class="parallax">
<?php 
include 'footer.php';
?></div>



    <!-- Page Content -->
   









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