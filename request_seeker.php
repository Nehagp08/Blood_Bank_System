<?php

if(!isset($_SESSION))
{
    session_start();   

}
else
{
    header('location:request_seeker.php');    
}
?>



<!-------INSERT THE THE DATA  IN DATABASE ----->
<?php

$request_Success = false;
$request_not_Success = false;

require 'includes/conn.php';

if(isset($_POST['Request']))

{
    $firstname =   mysqli_real_escape_string($conn,  $_POST['firstname']);
    $lastname =    mysqli_real_escape_string($conn,  $_POST['lastname']);
    $gender =      mysqli_real_escape_string($conn,  $_POST['gender']);
    $age =         mysqli_real_escape_string($conn,  $_POST['age']);
    $bloodgrp =    mysqli_real_escape_string($conn,  $_POST['bloodgrp']);
    $unit =        mysqli_real_escape_string($conn,  $_POST['unit']);
    $mobileno =    mysqli_real_escape_string($conn,  $_POST['mobileno']);
    $email =       mysqli_real_escape_string($conn,  $_POST['email']);
    $address =     mysqli_real_escape_string($conn,  $_POST['address']);
    $state =       mysqli_real_escape_string($conn,  $_POST['state']);
    $requestdate = mysqli_real_escape_string($conn,  $_POST['reqdate']);
    $type =        mysqli_real_escape_string($conn,  $_POST['typereq']);

    $sql= "INSERT INTO `seeker_request` ( `firstname`, `lastname`, `gender`, `age`, `bloodgrp`, `unit`, `mobileno`, `email`, `address`, `state`, `request_date`, `request_type`, `create_time`) VALUES ( '$firstname', '$lastname', '$gender', '$age', '$bloodgrp', '$unit', '$mobileno', '$email', '$address', '$state', '$requestdate', '$type', CURRENT_TIMESTAMP);";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        $request_Success ="Thank you...Your request has been under the process. We are update you shortly.";
    }
    else
    {
        $request_not_Success ="Sorry...There are some problem here please register again";
    }


}



?>

<?php
require 'includes/header.php';
require 'includes/nav.php';
?>

<?php
//-------The error and sucess of login page------------------>
if($request_not_Success)
 {
   echo '<div class="alert">
         <span class="closebtn">&times;</span>  
         <strong>Sorry!</strong> '. $request_not_Success.'
         </div>';
}

?>
 
 <!-------The error and sucess of login page------------------>
 
<?php

if($request_Success)
{
   echo '<div class="alert success">
         <span class="closebtn">&times;</span>  
         <strong>Thank You!</strong>  '. $request_Success .'
         </div>';
}

?>


<!-- Wallpaper of the  --->
<div class="donor-wallpaper">

   <img src="image/blood-stock.jpg" alt="" width="99.9%" height="300px">

</div>

<!--- heading of the project--->

<div class="register-quotes">
    <h1>When you need blood?</h1>

    <h2> Dear <?php echo $_SESSION['username']; ?></h2>

    <h4>Blood is needed at regular intervals and at all times as it has only a finite time to store. Red blood cells can be stored for about 42 days, Fresh Frozen Plasma and Cryoprecipitate for a year and platelets for 5 days.</h3>

</div>

<!---Donor As A Register the Form----->
<div class="donor-register">

    <img src="image/registration.png" alt="" width="100%" height="700px">

    <div class="donor-reg">

        <h1>Blood Request Registration</h1>

        <form action="" method="POST">

            <div id="donar-name">
         
                <h2 class="donar-name">Patient Name:</h2>
                
                <input class="firstname" type="text" name="firstname">
                <label class="firstlabel"for="">First Name:</label>
                <input class="lastname" type="text" name="lastname">
                <label class="lastlabel"for="">Last Name:</label>
            </div>

            <!-----Gender -->

           <div id="donar-gender">
            <h2 class="donar-gender">Choose Gender:</h2>
            <select class="donar-Gender" name="gender" id="">
                <option>--------</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <!---Date of Birth--->
            
                <h2 class="donar-age">Your Age:</h2>
                <input class="donar-Age" type="number" name="age" required>

            </div>

             <!-----Blood Group--->
            <div id="donar-bloodgrp">
                <h2 class="donar-bloodgrp">Blood Group:</h2>
                <select class="donar-Bloodgrp" name="bloodgrp" id="">
                    <option >-------------</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                </select>

                <h2 class="donar-unit">Total Unit:</h2>
                <input class="donar-Unit" type="number" name="unit" required>

           </div>
            
           <!---Mobile Number-->
           <div id="donar-contact">
            <h2 class="donar-mobile">Mobile Number:</h2>
            <input class="donar-Mobile" type="number" name="mobileno" required>
            <!----Email id-->
            <h2 class="donar-email">Your Email id:</h2>
            <input class= "donar-Email" type="email" name="email" required>
           </div>
            
           <!-----Address-->
           <div id="donar-address">

            <h2 class="donar-address">Current Address:</h2>
            <input class="donar-Address" type="text" name="address" required>

            <!---State-->

            <h2 class="donar-state">State Name:</h2>
            <select class="donar-State" name="state" id="">
                <option>---------------------</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
       </div>

               <div id="donate-date">
                <!----Choose Donate Date-->
                  <h2 class="dondate">Need Till:</h2>
                  <input class="Donatedate" type="date" name="reqdate" required>

                  <h2 class="donar-typereq">Type of Request:</h2>
                <select class="donar-TypeReq" name="typereq" id="">
                    <option>--------------</option>
                    <option value="Emergency">Emergency</option>
                    <option value="Noraml">Normal</option>
                </select>
                </div>

               
               <button class="requestbtn" type="submit" name="Request"> Submit</button>

        </form>


    </div>
    </div>

    <!--Scroll top to button button-->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

    <?php require 'includes/footer.php'; ?>
    
