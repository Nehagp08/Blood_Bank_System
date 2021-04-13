<?php

if(!isset($_SESSION))
{
    session_start();   

}
else
{
    header('location:search_blood.php');    
}
?>


<?php
require 'includes/header.php';
require 'includes/nav.php';
?>

<!-- Wallpaper of the  --->
<div class="donor-wallpaper">

   <img src="image/blood-stock.jpg" alt="" width="99.9%" height="300px">

</div>

<!--- heading of the project--->

<div class="donor-quotes">
    <h1>Search Blood Group Detail</h1>

    <!-- <h3>List of all Availability blood here. find your needed blood. you can easly access by contact detail</h3> -->
    <h4>Note: Donating blood is one of the greatest ways to help humankind. By doing so, we save someone’s precious life, and that is a blessing in itself. Find a blood donor in your time of need - Do Your bit, become a blood donor and Save Someone's Life.</h3>

</div>

<!---Donor Serach box--->

<div class="donor-search">

 <div class="search-box">
  <img src="image/slider1.jpg" alt="Notebook" style="width:100%;">
  <div class="search-form">


    <form action="" method="POST">
      <h1>Search Blood Group: </h1>
        <div id="search">
             <label class="label-bloodgrp" for="">Select Blood Group:</label>

             <select class="bloodgrp" name="bloodgrp" id="">
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
            
            <!----State Name-->
            <label class="label-state" for="">Select State:</label>

             <select class="state" name="state" id="">
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

        <button class="btn" name="search" type="submit">Search Blood Detail</button>
    </form>
</div>
</div>
</div>
<!-----------------End Of search Form ---------------------------------------->

<div class="list-all">
  <button class="list-btn"><a href="full_list.php">Get all Blood list records.</a></button>
</div>

<!-------------------Table ------------------------------>

<!----Donor List ----->

<div class="donor-list">
    <!-- <img src="image/stock-list.jpg" alt=""> -->
<div class="list-container">

       <h2> List of Blood <span> Available </span></h2>
        
      <ul class="responsive-table">

          
      <li class="table-header">
            <div class="col col-1">State</div>
            <div class="col col-2">Blood Group</div>
            <div class="col col-3">Detail</div>
            <div class="col col-4">Last Update</div>
          </li>
<!-----------------------------------------------------------------------------------> 
<?php
  
  require 'includes/conn.php';

  if(isset($_POST['search']))
{
  $bloodgrp = $_POST['bloodgrp'];
  $state    = $_POST['state'];

// below code will retuen last update time

$last = "SELECT `insert_time` FROM `donor_register` ORDER BY `donor_id` DESC LIMIT 1";
$last_update = mysqli_query($conn,$last);
$last_update_time = mysqli_fetch_array($last_update);


  $search_result = "SELECT * FROM `donor_register` WHERE `state` ='$state' AND `bloodgroup` = '$bloodgrp'";

  $search_get_result = mysqli_query($conn,$search_result );
  $num = mysqli_num_rows($search_get_result);

  if($num >= 1)
  {
  while($found = mysqli_fetch_array($search_get_result))
 {

?>



          <li class="table-row">
            <div class="col col-1" data-label="State"><?php echo $found['state']; ?> </div>
            <div class="col col-2" data-label="Blood Group"><?php echo $found['bloodgroup']; ?></div>
            <div class="col col-3" data-label="Detail"> <a href="check_in.php?donor_id=<?php echo $found['donor_id']; ?>"> Check In </a> </div>
            <div class="col col-4" data-label="Last Update"><?php echo $last_update_time['insert_time']; ?></div>
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