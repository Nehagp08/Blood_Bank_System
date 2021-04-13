<?php

if(!isset($_SESSION))
{
session_start();
}
else
{
  header('location: check_in.php');
}

// if(!isset($_SESSION['loggdin']) || $_SESSION['loggdin']!=true){
//     header('location:index.php');
//     exit;
// }

?>


<?php 
 require 'includes/header.php';
 require 'includes/nav.php';
?>

<div class="donor-list">
    <!-- <img src="image/blood1.jpg" alt=""> -->
<div class="list-container">
<?php

require 'includes/conn.php';

$donor_id = $_GET['donor_id'];

$search = "SELECT * From `donor_register` WHERE `donor_id` = '$donor_id'";
$result = mysqli_query($conn, $search);

while($row = mysqli_fetch_array($result))
{
?>
       <h2> Blood Donor Id:  <span>#<?php echo $row['donor_token'];?> </span></h2>
<?php
}
?>        
      <ul class="responsive-table">

          <li class="table-header">
            <div class="col col-1"> First Name</div>
            <div class="col col-2">Mobile_no</div>
            <div class="col col-3">Email</div>
            <div class="col col-4">Address</div>
          </li>

<?php

require 'includes/conn.php';

$donor_id = $_GET['donor_id'];

$search = "SELECT * From `donor_register` WHERE `donor_id` = '$donor_id'";
$result = mysqli_query($conn, $search);

while($row = mysqli_fetch_array($result))
{

?>

          <li class="table-row">
            <div class="col col-1" data-label="First Name"><?php echo $row['first_name'].$row['last_name'] ; ?> </div>
            <div class="col col-2" data-label="Mobile No"><?php echo $row['mobile_no']; ?></div>
            <div class="col col-3" data-label="Email"><?php echo $row['email_id']; ?>  </div>
            <div class="col col-4" data-label="Address"><?php echo $row['address']; ?></div>
          </li>
 
 <?php
}
?>         
      </ul>
</div>
</div>