<?php

if(!isset($_SESSION))
{
    session_start();   

}
else
{
    header('location:my_profile.php');    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
<!------Profile cover background design------>

<div class=headpart>

<img src="image/profile2.jpg" alt="" width="100%" height="600px">

<!--Left Side User effect---->
<div class="user">
    User Profile
</div>

<!---Right side link effect---->

<div class="home-link">

   <ul>
       <li><a href="logout.php"><i class="fa fa-fw fa-user"></i>  Logout</a></li>
       <li><span><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></span></li>
    </ul>
        
</div>

<!---user name  -->

<div class="user-name">

<h1>Hello <?php echo $_SESSION['username']; ?></h1>
<p>This is your profile page. You can see the progress you've made with your details and uses your based on demend.</p>

<button><a href="edit_profile.php">Edit Profile </a></button>
</div>


<!---------------------Left Side Donar Registration Detail----------------------------------------------->  
  
<div class="full">  

<div class="profile-detail">

<h1>User Detail</h1>

 <h2>If you want your profile detail then fill your user email and Submit then you get profile detail below. </h2>


 <!-------------FIND user detail information form--------------------------->

   <form action="" method="POST">
 
   <input type="email" name="useremail" placeholder ="Enter Your User Email"><br>
     <input type="submit" name="user" value="Submit">
   </form>


<?php 

require 'includes/conn.php';

if(isset($_POST['user']))
{

    $user_email = $_POST['useremail'];

$detail = "SELECT * FROM `singup` WHERE `email` = '$user_email'";
$result = mysqli_query($conn, $detail);
$num =mysqli_num_rows($result);
if($num == 1)
{
while($record = mysqli_fetch_array($result))
{
?>

<div class="detail">
     <table>
    <tr>
    <th>Profile Number:</th>
    <td><?php echo $record['dno']; ?></td>
  </tr>
  <tr>
    <th>User Name:</th>
    <td><?php echo $record['username']; ?></td>
  </tr>
  <tr>
    <th>Email id:</th>
    <td><?php echo $record['email']; ?></td>
  </tr>
  <tr>
    <th>Created Time:</th>
    <td><?php echo $record['create_date']; ?></td>
  </tr>
<?php

}
}
else
{
    echo "<h1> Sorry this user_email is doesn't exit</h1> ";
}
}
?>
</table>

</div>
</div>
 

 

</div>
</div>
</body>
</html>