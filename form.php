  <section style="background:white " class="p-4" id="contact">
        <h3 class="text-center">Tell us what you are looking for? </h3>

        <h6 class="text-center">Call 8650605941 now to get info or fill out the form below </h6>
        <br>
        <form action="" method="POST">

            <div class="container">

                <div class="  row">
                    <div class="col-lg-6 col-md-6 col-xs-6 form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 form-group">
                        <label for="name">mobile no.</label>
                        <input type="text" name="mobile"class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-xs-6 form-group">
                        <label for="name">Locality</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 form-group">
                        <label for="name">Roof Area</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 form-group">
                        <label for="name">Monthly Electricity Bill</label>
                        <input type="text" class="form-control">
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-xs-12 form-group">
                        <label for="name">Query</label>
                        <textarea name="query" id="" class="form-control" cols="200" rows="8" style="max-width: 100%;" placeholder="Type your query here......"></textarea>

                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <button class="btn " name="submit" type="submit" style="background:#111E6C; color:white;">
                            Submit!
                        </button>
                    </div>

                </div>


            </div>
        </form>
    </section>

    <?php

    if(isset($_POST['submit']))
    {

        $mobile=$_POST["mobile"];
$name=$_POST["name"];
$email=$_POST["email"];
$query=$_POST["query"];
$to = "jain2anki@gmail.com";
$txt = "Hiii, I have a query '". $query ."' 
Regards  ".$name."
Contact no.".$mobile.".";
$subject = "Query";
$headers = "From: ".$email."" . "\r\n" .
"CC: janiket1997@gmail.com";

mail($to,$subject,$txt,$headers);
// echo '<script>alert("Thank You ! for Your response.Your query haas been submitted succesfully. ");</script>';
echo $mobile;
// echo $email;
// echo $query;
        // header("Location : index.php");
    }
    else
    {
        // echo "notdine";
        // header("Location : about.php");
    }
    ?>