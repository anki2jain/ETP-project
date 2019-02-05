<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>se</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    body{
        padding-top:100px;
    }
    .dp{

        width:40%;
        /* height:60%; */
        display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
        
    }
    </style>
</head>
<body>

<div class="row">
<div class="col-md-6">
<?php
sub_image();
// <img src="s" alt="">
?>
</div>
<div class="col-md-4 mt-5 ">
<h3 class="mr-5"><?php details() ?></h3>

</div>
</div>


    
</body>
</html>