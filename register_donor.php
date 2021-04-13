<?php

if(!isset($_SESSION))
{
    session_start();   

}
else
{
    header('location:register_donor.php');    
}
?>


<?php

$register_Success = false;
$register_not_Success = false;

require 'includes/conn.php';

// if(isset($_POST['register']))
if(isset($_POST['register']))

{
    $firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $bloodgrp = mysqli_real_escape_string($conn, $_POST['bloodgrp']);
    $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
    $email = mysqli_real_escape_string($conn, $_POST['email_id']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $donate_date = mysqli_real_escape_string($conn, $_POST['donate_date']);

    //generate 6 digit donor_token
    $donor_token = bin2hex(random_bytes(3));

    $donatesql = "INSERT INTO `donor_register` ( `first_name`, `last_name`, `gender`, `age`, `bloodgroup`, `mobile_no`, `email_id`, `address`, `state`, `donate_date`, `donor_token`, `insert_time`) VALUES ('$firstname', '$lastname', '$gender', '$age', '$bloodgrp', '$mobile_no', '$email', '$address', '$state', '$donate_date', '$donor_token', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $donatesql);

    if($result)
    {
        $register_Success ="Thank you...Your request has been under the process";
    }
    else
    {
        $register_not_Success ="Sorry...There are some problem here please register again";
    }
}

?>


<?php
require 'includes/header.php';
require 'includes/nav.php';
?>

<?php
//-------The error and sucess of login page------------------>
if($register_not_Success)
 {
   echo '<div class="alert">
         <span class="closebtn">&times;</span>  
         <strong>Sorry!</strong> '. $register_not_Success.'
         </div>';
}

?>
 
 <!-------The error and sucess of login page------------------>
 
<?php

if($register_Success)
{
   echo '<div class="alert success">
         <span class="closebtn">&times;</span>  
         <strong>Thank You!</strong>  '. $register_Success .'
         </div>';
}

?>



<!-- Wallpaper of the  --->
<div class="donor-wallpaper">

   <img src="image/blood-stock.jpg" alt="" width="99.9%" height="300px">

</div>

<!--- heading of the project--->

<div class="register-quotes">
    <h1>Welcome to Donor Registration Form</h1>
      
    <h2> Dear <?php echo $_SESSION['username']; ?></h2>
    <h4>Donating blood is one of the greatest ways to help humankind. By doing so, we save someone’s precious life, and that is a blessing in itself. Find a blood donor in your time of need - Do Your bit, become a blood donor and Save Someone's Life.</h3>

</div>

<!---Donor As A Register the Form----->
<div class="donor-register">

    <img src="image/registration.png" alt="" width="100%" height="700px">

    <div class="donor-reg">

        <h1>Donor Registration Form</h1>

        <form action="" method="POST">
 
            <div id="donar-name">
         
                <h2 class="donar-name">Donor Name:</h2>
                
                <input class="firstname" type="text" name="first_name">
                <label class="firstlabel"for="">First Name:</label>
                <input class="lastname" type="text" name="last_name">
                <label class="lastlabel"for="">Last Name:</label>
            </div>

            <!-----Gender -->

           <div id="donar-gender">
            <h2 class="donar-gender">Choose Gender:</h2>
            <select class="donar-Gender" name="gender" id="">
                <option>--------------</option>
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
                    <option>----------------</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                </select>
           </div>
            
           <!---Mobile Number-->
           <div id="donar-contact">
            <h2 class="donar-mobile">Mobile Number:</h2>
            <input class="donar-Mobile" type="number" name="mobile_no" required>
            <!----Email id-->
            <h2 class="donar-email">Your Email id:</h2>
            <input class= "donar-Email" type="email" name="email_id" required>
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
                  <h2 class="dondate">Donating Date:</h2>
                  <input class="Donatedate" type="date" name="donate_date" required>
                </div>

               
               <button class="requestbtn" type="submit" name="register"> Submit</button>

        </form>


    </div>
    </div>

    <!--Scroll top to button button-->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

    <?php require 'includes/footer.php'; ?>
    
