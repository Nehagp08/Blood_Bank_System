<?php
session_start();

if(!isset($_SESSION['loggdin']) || $_SESSION['loggdin']!=true){
    // header('location:login.php');
    // exit;
}

?>


<?php
require 'includes/header.php';
require 'includes/nav.php';


?>



<!-- slider show of home page-->

<div class="w3-content w3-section" style="max-width:100%; margin-top:3px;" >

  <img class="mySlides" src="image/slider1.jpg" style="width:100%; height:500px; ">
  <img class="mySlides" src="image/slider2.jpg" style="width:100%; height:500px; ">
  <img class="mySlides" src="image/slider3.jpg" style="width:100%; height:500px; ">

</div> 

<!-- Notification moving-->

<div class="marquee">
 
<p>  welcome  <?php echo $_SESSION['username'];?> <span>text not visible</span> The blood you donate give Someone another chance of life. <span>text not visible</span>  Help Save a Life + Give the gift of blood. </p>
        
</div>

<!-- ';
} 
else
{
  echo '
  <div class="marquee">
   
  <p> The blood you donate give Someone another chance of life. <span>text not visible</span>  Help Save a Life + Give the gift of blood. </p>
          
  </div>
  
  '; 
}
 ?>  -->
<!-- Our Service Welcome Message-->

<div class="service">

          <h1 class="message">Welcome to Our Save Life World  </h1>
<?php

if(!isset($_SESSION['loggdin']) || $_SESSION['loggdin']!=true)
{

    echo  '<h2 class="welcome"> Welcome User Please Login .</h2> ';
}
else
{
   echo ' <h1 class="welcome"> Dear '; ?> <?php echo $_SESSION['username']; ?> <?php echo'</h1> ';
}
?>          
</div>

<!--More Catageries abaout Topic-->
     
<div class="fulservice">

    <div class="fulservice-title">
             <h2>Our service</h2>
    </div>

    <div class="fulservice-Box">
                                  
          <div class="fulservice-subbox">

<!--If you are not login then after clicking the service box button you go to the login page directly else if you are login then you go to directly as choose service page-->
             
<?php

    if(!isset($_SESSION['loggdin']))

    {
      echo '  <a href="login.php"><h4>Search  Blood </h4></a>
      </div>

      <div class="fulservice-subbox">
         <a href="login.php"><h4> Register As a Donor </h4></a>
      </div>

      <div class="fulservice-subbox">
           <a href="login.php"><h4> Request for Blood </h4></a>
      </div>

           ';

    }
    else
    {
      echo ' <a href="search_blood.php"><h4>Search  Blood </h4></a>
      </div>

      <div class="fulservice-subbox">
         <a href="register_donor.php"><h4> Register As a Donor </h4></a>
      </div>

      <div class="fulservice-subbox">
           <a href="request_seeker.php"><h4> Request for Blood </h4></a>
      </div>
           
           ';

    }
?>
  
          <div class="fulservice-subbox">
                <a href="stock.php"> <h4> Blood Stock </h4></a>
          </div>
                              
    </div> 
</div>
<!----Our Service end the code---->

<!----Blood request update below th code---->

<div class="update">

   <div class="update-container">
       <img src="image./slider1.jpg" alt="Notebook" style="width:100%;  height: 450px; border-radius: 20px;">
     
       <div class="update-cont">

         <h2>Blood Request Update</h2>
   

 <!-- <marquee direction="up"> -->

    <div class="request">
       <ul class="responsive-table">
          <li class="table-header">
            <div class="col col-1"><span>Pateint Name</span></div>
            <div class="col col-2"><span>Blood Group</span> </div>
            <div class="col col-3"><span> Mobile Number</span></div>
            <div class="col col-4"><span>Location</span> </div>
          </li>
          <marquee direction="up">
          <ul> 
        
<?php

require 'includes/conn.php';

$sql = "SELECT * From `seeker_request`";
$res = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($res))
{
?>
            <li class="table-row">
            <div class="col col-1" data-label="Pateint Name"><?php echo $row['firstname']; ?></div>
            <div class="col col-2" data-label="Blood Group"><?php echo $row['bloodgrp']; ?> </div>
            <div class="col col-3" data-label="Mobile Number"><?php echo $row['mobileno']; ?></div>
            <div class="col col-4" data-label="Location"><?php echo $row['address']; ?></div>
          </li>      
         
          <?php
}
?>         
     </marquee> 
   </ul>  
  </div>
 </div>
</div>

</div>


<!---Information about the blood Donation--->

<div class="information">

  <h1>Information About Blood Donote</h1>

<div class="divide">

<!---------- Left side information------------------------------------------------------->

  <div class="part1">
 
  <img src="image/about-blood.jpg" alt="infowallpaper">

  <div class="message">
    <h1>Give Blood, Give Life.</h1>
    <div class="me">
    <p>Donating blood has benefits for your emotional and physical health.</p>
    <p>Blood donation not only makes the receiver’s life good but also helps the donor to maintain good health.</p>
</div>

<!--If you are not login then after clicking the donate button you go to the login page directly else if you are login then you go to directly register donor page-->

<?php 

if(!isset($_SESSION['loggdin']))
{
  echo '<h3><a class="link" href="login.php">Donote Now</a></h3>
       ';
}
else
{
  echo '<h3><a class="link" href="register_donor.php">Donote Now</a></h3>
       ';
}

?>

</div>  
  </div>
<!-----------------End of left side information------------------------------------------------------>

<!---------------- Right side information--------------------------------------------------------------->

  <div class="part2">

    <div class="container">

       <h2> Compatible Blood Type<small> Donors </small></h2>
        
      <ul class="responsive-table">

          <li class="table-header">
            <div class="col col-1">Blood Type</div>
            <div class="col col-2">Donate Blood To</div>
            <div class="col col-3">Receive Blood From</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> A+ </span></div>
            <div class="col col-2" data-label="Donate Blood To">A+  AB+</div>
            <div class="col col-3" data-label="Receive Blood From">A+  A-  O+  O-</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> O+ </span></div>
            <div class="col col-2" data-label="Donate Blood To">O+  A+  B+  AB+</div>
            <div class="col col-3" data-label="Receive Blood From">O+  O-</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> B+ </span></div>
            <div class="col col-2" data-label="Donate Blood To">B+  AB+</div>
            <div class="col col-3" data-label="Receive Blood From">B+  B-  O+  O-</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> AB+ </span></div>
            <div class="col col-2" data-label="Donate Blood To">AB+</div>
            <div class="col col-3" data-label="Receive Blood From">Everyone</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> A- </span></div>
            <div class="col col-2" data-label="Donate Blood To">A+  A-  AB+  AB-</div>
            <div class="col col-3" data-label="Receive Blood From">A-  O-</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> O- </span></div>
            <div class="col col-2" data-label="Donate Blood To">Everyone</div>
            <div class="col col-3" data-label="Receive Blood From">O-</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> B- </span></div>
            <div class="col col-2" data-label="Donate Blood To">B+  B-  AB+  AB-</div>
            <div class="col col-3" data-label="Receive Blood From">B-  O-</div>
          </li>

          <li class="table-row">
            <div class="col col-1" data-label="Blood Type"><span> AB- </span></div>
            <div class="col col-2" data-label="Donate Blood To">AB+  AB-</div>
            <div class="col col-3" data-label="Receive Blood From">AB-  A-  B-  O-</div>
          </li>

      </ul>
    </div>

  </div>
</div>

<!-----------------End of Right side information------------------------------------------------------>
</div>
<!-----------------End information------------------------------------------------------>


<!----Testmonials  below th code---->
<div class="test">

<!-- <img src="image/info1.jpg" alt=""> -->
<div class="testimon">

    <div class="testimonial-slider">
         <h1>Experience through Donors </h1>
      <ul class="slider">
        <li>
          <div class="testimonial-slider-content">
            <q> It's my first experience painful when. I wouldn't feel my pain while the blood is being drawn, 
            </q>
            <p class="source">- Neha Kumari, Delhi</p>
          </div>
        </li>

        <li>
          <div class="testimonial-slider-content">
            <q>Here is the second one, this is awesome!</q>
            <p class="source">- Deep Chirag, Gaya</p>
          </div>
        </li>

        <li>
          <div class="testimonial-slider-content">
            <q>It's my first time Here litle bit narvous but All in all my experiences had been positive!</q>
            <p class="source">- Gourav Kumar, Dhanbad</p>
          </div>
        </li>

        <li>
          <div class="testimonial-slider-content">
            <q>Donating blood isn't a pain-free experience</q>
            <p class="source">- Ankit Kumar, Durgapur</p>
          </div>
        </li>

      </ul>
    </div>
</div> 
</div>

<!----Testmonials  end the code---->



<!--Scroll top to button button-->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>



<?php  require 'includes/footer.php'; ?>
