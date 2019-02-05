<?php

echo 'hiiii';
function connect_database(){
    
    $link = mysqli_connect("localhost","root","","senterprises");
    if( mysqli_connect_error()){
         die("something is fishy");
     }
     
return $link;

}



function show_navprod(){
$link=connect_database();
$query="SELECT * from `main_prod` " ;
$result=mysqli_query($link,$query);
if(!$result)
die('missing something');
while($row= mysqli_fetch_array($result))
{ 
echo ' <a class="dropdown-item" href="product.php?prod='.$row['prod_name'].'">'.$row['prod_name'].'</a>
';


}
}
function prod_list()
{
$link=connect_database();
$query="SELECT * from `main_prod` " ;
$result=mysqli_query($link,$query);
if(!$result)
die('missing something');
echo '
<div class="container">
<h1 class="text-center mb-5 ">Product By Category</h1>
<div class="row">';
while($row= mysqli_fetch_array($result))
{
    echo '  <div class="col-xs-12 col-sm-6 col-md-4">                  
    <div class="card  " style="margin-bottom:20px">
                    <div class="card-body text-center">
                       <p ><img id="c" class=" card-img-top" src="'.$row['image'].'" alt=""></p>
                        <a href="product.php?prod='.$row['prod_name'].'" class="btn" id='.$row['prod_name'].' style="width:100% ; background:#111E6C ;" role="button">'.$row['prod_name'].'</a> 
                    </div>
                </div>
    
</div>  ';   

}
echo '</div></div>';



}
function show_prodnm()
{
    if(isset($_GET['prod']))
    {
        echo $_GET['prod'];
        
    }
}

function show_subprod()
{

    if(isset($_GET['prod']))
    {
        $link=connect_database();
        $tb_name=strtolower($_GET['prod']);
        $query="SELECT * from `$tb_name`";
        $result=mysqli_query($link,$query);
    if(!$result)
    die('missing something');
    // echo '<br><br><h1>'.$tb_name.'</h1>';
    echo '
    <div class="container">
    <h1 class="text-center mb-5 "></h1>
    <div class="row">';
    while($row= mysqli_fetch_array($result))
    {
        echo '  <div class="col-xs-12 col-sm-6 col-md-4">                  
        <div class="card  " style="margin-bottom:20px">
                        <div class="card-body text-center">
                           <p ><img id="c" class=" card-img-top" src="'.$row['image'].'" alt=""></p>
                            <a href="sub_prod.php?detail='.$row['name'].' & prod='.$tb_name.'" class="btn " id='.$row['name'].' style="width:100% ; background:#111E6C ;" role="button">'.$row['name'].'</a> 
                        </div>
                    </div>
        
    </div>  ';   
    
    }
    echo '</div></div>';


    }

    else
    {
        header("index.php");
    }
}

function addprod()
{
    if(isset($_POST["submit"])){
        $link=connect_database();
        $product= $_POST['product'];
        $brief= $_POST['description'];
        //$pic=$_POST['pic'];
        // $q="show table where $product";
        $dub ="SELECT * from `$product`";
        $check =mysqli_query($link,$dub);
        $filename1=$_FILES['pic']['name'];
        $tempname1=$_FILES['pic']['tmp_name'];
        $folder1 = "fileupload/".$filename1 ;
        move_uploaded_file($tempname1,$folder1);
        // if(mysqli_num_rows($check))
        // {
        //     echo '<div class="alert alert-danger"> product already exist</div>';
        // }
        // else 
         
            $add = "INSERT INTO `main_prod` (prod_name, detail,image) VALUES ('$product','$brief','$folder1')";
        
            $addt="CREATE TABLE `$product` (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name TEXT NOT NULL,
                detail TEXT ,
                image TEXT 
                )";
        
        if (mysqli_query($link,$add)  && mysqli_query($link,$addt) )
        {
            echo 'partially done ';
    
            echo '<script> alert("Done!")</script>'; 
        // }
        }
         else {
        echo '<script> alert("Not Done!")</script>';
        
        echo "Error: " . $addt . "<br>" . $link->error;
        
        echo "Error: " . $add . "<br>" . $link->error;
        }
        
        
        
        
        }
        
        
}
function add_sub_prod()
{
    echo 'done';
    if(isset($_POST["submit"])){
        $link=connect_database();
        $product=strtolower($_POST['product']);
        $subproduct= $_POST['subproduct'];
        $brief= $_POST['description'];
        //$pic=$_POST['pic'];
        
        
        $dub ="SELECT * from `$product` where name='$subproduct' ";
        $check =mysqli_query($link,$dub);
        // $filename=$_FILES['file']['name'];
        // $tempname=$_FILES['file']['tmp_name'];
        // $folder = "fileupload/".$filename ;
        // move_uploaded_file($tempname,$folder);
        $filename1=$_FILES['pic']['name'];
        $tempname1=$_FILES['pic']['tmp_name'];
        $folder1 = "fileupload/".$filename1 ;
        move_uploaded_file($tempname1,$folder1);
        if(mysqli_num_rows($check)>0)
        {
            echo '<div class="alert alert-danger"> Sub product already exist</div>';
        }
        else {
            $add = "INSERT INTO `$product` (name, detail,image) VALUES ('$subproduct','$brief','$folder1')";
        if (mysqli_query($link,$add)) {
            echo '<script> alert("Done!")</script>'; 
        }
         else {
        echo '<script> alert("Not Done!")</script>';
        
        //echo "Error: " . $add . "<br>" . $link->error;
        }
        
        }
        
        
        }

}
function sub_image()
{
    $link=connect_database();
    $name=$_GET['detail'];
    $prod=$_GET['prod'];
 
    $query="Select * from `$prod` where name='$name'";
    $result=mysqli_query($link,$query);
if($result)
{       
    $row=mysqli_fetch_array($result);
    $img = $row['image'];
    echo '<img class="center dp" src="'.$img.'">';
}
        else
        echo "Error: " . $result . "<br>" . $link->error;
}

function details()
{
    $link=connect_database();
    $name=$_GET['detail'];
    $prod=$_GET['prod'];
 
    $query="Select * from `$prod` where name='$name'";
    $result=mysqli_query($link,$query);
if($result)
    while($row=mysqli_fetch_array($result))
    {
       
        echo '
        <h3 class="grey">'.$row['name'].'</h3>
        <hr>
        <h4 class="grey">Product features:</h4>';
        echo nl2br('<br>');
        echo'
        <table class="table table-striped">
        <tbody>';
       
       $str=explode(",",$row['detail']);
        
       for($i=0;$i<sizeof($str);$i++)
       {

           $data=explode(":",$str[$i]);
           echo '<tr>';
           for($j=0;$j<sizeof($data);$j++)
           echo "<td>$data[$j]</td>";
        //    echo '<td>".'$data[$j]'."</td>';
           echo '</tr>';
        //    echo nl2br("<br>");
       }

       echo '
        </tbody>
        </table>
        
        ';
        
    }
    else 
        echo "Error: " . $result . "<br>" . $link->error;
}
?>
