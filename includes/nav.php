<?php

if(isset($_SESSION['loggdin']) && $_SESSION['loggdin'] == true)
{
    $loggdin = true;
}
else
{
    $loggdin = false;
}

echo '
       <div class="menu-bar">
       <ul>

       <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>

       <li><a href="about_us.php"><i class="fa fa-user"></i>About Us</a> </li>
   ';

if($loggdin) 
{

echo '
      <li><a href="#"> <i class="fa fa-clone"></i>Donor</a>
        
        <div class="sub-menu-1">

           <ul>

              <li class="hover-me"><a href="register_donor.php">Register to Donote</a><i class="fa fa-bullseye"></i> </li>
              <li class="hover-me"><a href="list_of_donors.php">List of Donor</a><i class="fa fa-heartbeat"></i></li>

           </ul>
        </div>
      </li>

      <li><a href="#"> <i class="fa fa-clone"></i>Seeker</a>
        
        <div class="sub-menu-1">

           <ul>

              <li class="hover-me"><a href="search_blood.php">Search Blood Grp</a><i class="fa fa-bullseye"></i> </li>
              <li class="hover-me"><a href="request_seeker.php">Request</a><i class="fa fa-heartbeat"></i></li>

           </ul>
        </div>
      </li>
';
}

  
echo '
        <li><a href="stock.php"><i class="fa fa-picture-o"></i>Stock</a></li>   
        <li><a href="contact_us.php"><i class="fa fa-phone"></i>Contact Us</a></li>
      ';  


if(!$loggdin)
{
echo '
        <li><a href="login.php"><i class="fa fa-sign-in"></i>Log In</a> </li>
    ';
}
 
if($loggdin)
{
echo ' 
        <li><a href="my_profile.php"><i class="fa fa-user"></i>'; ?> <?php echo $_SESSION['username']; ?> <?php echo' </a> 
        <div class="sub-menu-1">

        <ul>

           <li><a href="my_profile.php"><i class="fa fa-user"></i>My Profile</a> 
           <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a> </li>

        </ul>
     </div>
   </li>




        
   ';
}
echo '
    </ul>
    </div>

    ';

    ?>