<?php

if(!isset($_SESSION))
{
session_start();
}
else
{
  header('location: gallery.php');
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

<div class="gallery-heading">

<h1>Our Digital Gallery</h1>
</div>


<div class="our-gallery">

<div class="gallery">
  <a target="_blank" href="image/gallery01.jpg">
    <img src="image/gallery01.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Hand Hold Heart</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery02.jpg">
    <img src="image/gallery02.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">List Of Blood Group</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery03.jpeg">
    <img src="image/gallery03.jpeg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc"> Connecting to Life</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery04.jpg">
    <img src="image/gallery04.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Our Life Sever</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery05.jpg">
    <img src="image/gallery05.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Donating the Blood</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery06.jpg">
    <img src="image/gallery06.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Our Hero</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery07.jpg">
    <img src="image/gallery07.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Top 8 Reasons</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery08.jpg">
    <img src="image/gallery08.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Donate Now</div>
</div>


<div class="gallery">
  <a target="_blank" href="image/gallery09.jpg">
    <img src="image/gallery09.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Benifits of Blood Donation</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery10.jpg">
    <img src="image/gallery10.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Group of blood</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery11.jpg">
    <img src="image/gallery11.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Donate the Life</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/gallery12.jpg">
    <img src="image/gallery12.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Blood Donation</div>
</div>

</div>

<?php require 'includes/footer.php'; ?>