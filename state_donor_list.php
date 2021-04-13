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
            <div class="col col-1">Donor Name</div>
            <div class="col col-2">Blood Group</div>
            <div class="col col-3">Donor Age</div>
            <div class="col col-4">Donor Address</div>
          </li>

<?php

require 'includes/conn.php';


$search_list = "SELECT * From `donor_register` ";
$search_result = mysqli_query($conn, $search_list);

while($list = mysqli_fetch_array($search_result))
{

?>

          <li class="table-row">
            <div class="col col-1" data-label="Donor Name"><?php echo $list['first_name'].$list['last_name']; ?></div>
            <div class="col col-2" data-label="Blood Group"><?php echo $list['bloodgroup']; ?></div>
            <div class="col col-3" data-label="Donor Age"><?php echo $list['age']; ?> </div>
            <div class="col col-4" data-label="Donor Address"><?php echo $list['address'] ?></div>
          </li>
 
<?php
}

?>
      </ul>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>