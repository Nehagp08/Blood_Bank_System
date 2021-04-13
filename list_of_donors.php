<?php

if(!isset($_SESSION))
{
    session_start();   

}
else
{
    header('location:list_of_donors.php');    
}

?>

<?php
require 'includes/header.php';
require 'includes/nav.php';
?>

<!-- Wallpaper of the  --->
<div class="donor-wallpaper">

   <img src="image/list-of-donor.jpg" alt="" width="99.9%" height="300px">

</div>

<!--- heading of the project--->

<div class="donor-quotes">
    <h1>List Of All Donor</h1>

    <h3>Special Thanks For all list of Our donor.</h3>
    <h4> 
      The world needs enough safe blood for everyone in need.
Every few seconds, someone, somewhere, needs blood.
Transfusions of blood and blood products save millions of lives every year. Health is a human right; everyone in the world should have access to safe blood transfusions, when and where they need them.</h3>

</div>

<!---Donor Serach box--->

<div class="donor-search">

<div class="search-box">
  <img src="image/slider1.jpg" alt="Notebook" style="width:100%;">
  <div class="search-form">

    <form action="" method="POST">
      <h1>Search Donors list </h1>
        <div id="search">
             <label class="label-bloodgrp" for="">Select Blood Group:</label>

             <select class="bloodgrp" name="bloodgrp" id="">
             <option>-----------------</option>
               <option value="A+">A+</option>
               <option value="O+">O+</option>
               <option value="B+">B+</option>
               <option value="AB+">AB+</option>
               <option value="A-">A-</option>
               <option value="O-">O-</option>
               <option value="B-">B-</option>
               <option value="AB-">AB-</option>
            </select>  
            
            <!----State Name-->
            <label class="label-state" for="">Select State:</label>

             <select class="state" name="stateid" id="">
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

        <button class="btn" name="statewise" type="submit">Search Donors list</button>
    </form>
    

  </div>
</div>

</div>
<!-----------------End Of search Form ---------------------------------------->

<div class="list-all">
  <button class="list-btn"><a href="state_donor_list.php">Get all donors list records.</a></button>
</div>

<!-------------------Table ------------------------------>



<!----Donor List ----->

<div class="donor-list">
    <!-- <img src="image/blood1.jpg" alt=""> -->
<div class="list-container">

       <h2> Below are a list of <span> Donors </span></h2>
        
      <ul class="responsive-table">

          <li class="table-header">
            <div class="col col-1">Donor Name</div>
            <div class="col col-2">Blood Group</div>
            <div class="col col-3">Donor Age</div>
            <div class="col col-4">Donor Address</div>
          </li>

<?php

require 'includes/conn.php';

if(isset($_POST['statewise']))
{

  $bloodgrp    = $_POST['bloodgrp'];
  $state    = $_POST['stateid'];


  $search_result = "SELECT * FROM `donor_register` WHERE `state` ='$state' AND `bloodgroup`= '$bloodgrp'";

  $search_get_result = mysqli_query($conn,$search_result );
  $num = mysqli_num_rows($search_get_result);

  if($num >= 1)
  {
  while($found = mysqli_fetch_array($search_get_result))
 {

?>          


          <li class="table-row">
            <div class="col col-1" data-label="Donor Name"> <?php echo $found['first_name'].$found['last_name']; ?> </div>
            <div class="col col-2" data-label="Blood Group"><?php echo $found['bloodgroup'];?></div>
            <div class="col col-3" data-label="Donor Age"><?php echo $found['age'];?></div>
            <div class="col col-4" data-label="Donor Address"><?php echo $found['address'];?></div>
          </li>
<?php
 }
}
else
{
  echo "<h1>Sorry No record found..</h1> ";
}
}
?>           
      </ul>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

<?php require 'includes/footer.php'; ?>