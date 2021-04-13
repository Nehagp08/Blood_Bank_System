<?php

if(!isset($_SESSION))
{
session_start();
}
else
{
  header('location: stock.php');
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

<!-- Wallpaper of the  --->
<div class="donor-wallpaper">

   <img src="image/blood-stock.jpg" alt="" width="99.9%" height="300px">

</div>

<!--- heading of the project--->

<div class="donor-quotes">
    <h1>Blood Stocks</h1>

    <h3>List of all Availability blood here. find your needed blood.</h3>
    <h4>Donating blood is one of the greatest ways to help humankind. By doing so, we save someone’s precious life, and that is a blessing in itself. Find a blood donor in your time of need - Do Your bit, become a bllod donor and Save Someone's Life.</h3>

</div>


<!----Donor List ----->

<div class="donor-list">
    <!-- <img src="image/stock-list.jpg" alt=""> -->
<div class="list-container">

       <h2> Below are a list of Blood <span> Availability </span></h2>
        
      <ul class="responsive-table">

          <li class="table-header">
            <div class="col col-1">Blood Group</div>
            <div class="col col-2">Unit</div>
            <div class="col col-3">State</div>
            <div class="col col-4">Last Update</div>
          </li>

<?php

require 'includes/conn.php';


//below code will be return last insert record update time

$last = "SELECT `insert_time` FROM `donor_register` ORDER BY `donor_id` DESC LIMIT 1";
$last_update = mysqli_query($conn,$last);
$last_update_time = mysqli_fetch_array($last_update);

$count_unit = "SELECT  `bloodgroup`,`state`, count(*) AS unit FROM `donor_register` GROUP BY `bloodgroup`,`state` ORDER BY `state`,`bloodgroup` ASC ";
$count = mysqli_query($conn,$count_unit);

while($row = mysqli_fetch_array($count))
{

?>
 
          <li class="table-row">
            <div class="col col-1" data-label="Blood Group"> <?php echo $row['bloodgroup']; ?> </div>
            <div class="col col-2" data-label="Unit"><?php echo $row['unit']; ?></div>
            <div class="col col-3" data-label="State"> <?php echo $row['state']; ?> </div>
            <div class="col col-4" data-label="Last Update"> <?php echo $last_update_time[0]; ?></div>
          </li>
<?php

}
?>
          
      </ul>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

<?php require 'includes/footer.php'; ?>