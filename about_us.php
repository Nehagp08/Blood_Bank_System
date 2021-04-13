<?php

if(!isset($_SESSION))
{
session_start();
}
else
{
  header('location: about_us.php');
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

<!---Below Navbar background image--->
<div class="about-container">
  <img src="image/about-blood.jpg" alt="Notebook" style="width:100%;" height=300px;>
  <div class="about-content">
    <h1 class="titleabout">About Us</h1>
    <h2>Let's help each other and Save Life!</h2>
  </div>
</div>

<!---Title brief of this page--->

<div class="title-breif">
        
        <h1><span> About </span>Us </h1>
        <p class="spa"> 
            <span>Our Save Life World! </span>is free online seraching platform for whole type of blood. We are trying <br> the help of this online Seraching website to connect all people and help for needed <br> person who want any type blood. it possible for anyone, So main perpous <br> I made this website let's help each other. <br> <span> Our mission</span> To fulfill the Blood Needs and No one shall suffer in any location <br> and neighbouring areas for want of blood.
        </p>
</div>

<!--- Our Mission of this website--->

<div class="ourmission">

<div class="mission-image">

<img src="image/about-mission.png" alt="" width="350px" height="450px">
</div>
        <div class="mission">
            <i class="fa fa-quote-left fa2" aria-hidden="true"></i>
            <div class="mission-text">
                <i class="fa fa-quote-right fa1" aria-hidden="true"></i>
                
             <div class="tex">
                 <h1>Our Mission</h1>
                 <p> Our Mission of "BLOOD BANK SAVE LIFE" - To fulfill the Blood Needs to all needed person and Saving lives by providing blood and biomedical solutions. And also to motivate and train the next generation youth leaders to ensure sustainability of the mission of Voluntary Blood Donation. We are committed to educating the community, inspiring donation, and connecting lives.</p>

              
                 <!-- <p>ConnectLife en
                   -- 1. 
                  --2 Safer, by bringing blood donors and those in need to a common platform.
                --- 3.
              --imp To be the best blood center in india </p> -->

             </div>
            </div>
        </div>
</div>

<!--- Our Vission of this website--->
    
    <div class="ourvission">

       <div class="vission">

            <div class="vission-image">

              <img src="image/about-mission.png" alt="" width="500px" height="500px">

            </div>

            <div class="vission-info">

             <h1>Our Vission</h1>
             <p>Our visions in future where blood is available for all in need, we decrease the number of deaths. and  Bringing Dignity to Life of people by making Quality blood and blood products available when needed.
               and also To be the real hope of every Indian in search of a voluntary blood donor
             </p>
            </div>

</div>
    </div>


 <!--- Our Moto -->
 <div class="moto">

    <h1>Our Service of Save Life!</h1>

      <div class="container">
        <img src="image/about-service.jpg" alt="Notebook" style="width:100%; height: 980px;">

        <div class="content">

            <div class="card">
                <div class="face face1">
                   <div class="story">
                       <h2>What we do?</h2>
                        <p>We connect directly blood donors with patient, without any intermediary such as blood banks, for an efficient and easy process. 
                        </p>
                        <a href="#">Start Now</a>
                   </div>
                </div>
                      <div class="face face2">
                        <h2>01</h2>
                        <p>What we do?</p>   
                      </div>
            </div>
    
            <div class="card">
                <div class="face face1">
                    <div class="story">
                        <h2>Our Moto Save Life</h2>
                        <p> We are a non profit Service provide and our main moto is to make sure that everything is done to protect vulnerable persons. Help us by making a gift !</p>
                        <a href="#">Start Now</a>
                     </div>
                </div>
                     <div class="face face2">
                        <h2>02</h2>
                        <p>Our Moto Save Life</p>
                      </div>
            </div>

            
            <div class="card">
                <div class="face face1">
                    <div class="story">
                         <h2>We Provide Totally Free Service</h2>
                          <p> Save Life Connect's ultimate goal is to provide an easy-to-use, easy-to-access, fast, efficient, and reliable way to get life-saving blood, totally Free of cost 
                          </p>
                          <a href="#">Start Now</a>
                     </div>
                 </div>
                     <div class="face face2">
                         <h2>03</h2>
                         <p>We Provide Totally Free Service </p>
                     </div>
            </div>
        
            <div class="card">
                  <div class="face face1">
                       <div class="story">
                          <h2>We get Notify Process</h2>
                          <p>We Connect works with mobile network to connect blood donors and paitent family through an automated SMS service, mobile calling. you also track donors.
                          </p>
                          <a href="#">Start Now</a>
                       </div>
                  </div>
                        <div class="face face2">
                           <h2>04</h2>
                           <p>We get Notify Process</p>
                        </div>
             </div>
    
            <div class="card">
                <div class="face face1">
                    <div class="story">
                         <h2>We Work as a TeamWork</h2>
                          <p> We believe each person is important to the success of our life. We believe cooperation, temperate behavior.
                          </p>
                          <a href="#">Start Now</a>
                     </div>
                 </div>
                     <div class="face face2">
                         <h2>05</h2>
                         <p>We Work as a TeamWork</p>
                     </div>
            </div>
         </div>
     </div>

</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
    <?php require 'includes/footer.php'; ?> 
