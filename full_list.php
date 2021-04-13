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





<!----Donor List ----->

<div class="donor-list">
    <!-- <img src="image/blood1.jpg" alt=""> -->
<div class="list-container">

       <h2> Below are a list of <span> Donors </span></h2>
        
      <ul class="responsive-table">

          <li class="table-header">
            <div class="col col-1">State</div>
            <div class="col col-2">Blood Group</div>
            <div class="col col-3">Detail</div>
            <div class="col col-4">Last Update</div>
          </li>

<?php

require 'includes/conn.php';

// below code will retuen last update time

$last = "SELECT `insert_time` FROM `donor_register` ORDER BY `donor_id` DESC LIMIT 1";
$last_update = mysqli_query($conn,$last);
$last_update_time = mysqli_fetch_array($last_update);


$search_res = "SELECT * From `donor_register` ";
$search_result = mysqli_query($conn, $search_res);

while($record = mysqli_fetch_array($search_result))
{

?>

          <li class="table-row">
            <div class="col col-1" data-label="State"><?php echo $record['state']; ?> </div>
            <div class="col col-2" data-label="Blood Group"><?php echo $record['bloodgroup']; ?></div>
            <div class="col col-3" data-label="Detail"> <a href="check_in.php?donor_id=<?php echo $record['donor_id']; ?>"> Check In </a> </div>
            <div class="col col-4" data-label="Last Update"><?php echo $last_update_time['insert_time']; ?></div>
          </li>
 
<?php
}

?>
      </ul>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>