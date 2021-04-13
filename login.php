<?php

// step1 : error define

$success= false;
$error = false;

// step2 : database connecting

include 'includes/conn.php';

//step3: server to request post

if(isset($_POST['singup']))

{

// step4: varable declared
// mysqli_real_escape_string($conn, -- this code help to enter special charcter in database
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email =  mysqli_real_escape_string($conn, $_POST['email']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword =  mysqli_real_escape_string($conn, $_POST['cpassword']);

// step5: check username presnt in database yes or no

    $check = "SELECT * FROM `singup` WHERE `email` = '$email' ";
    $res = mysqli_query($conn,$check);
    $num = mysqli_num_rows($res);

    // step6 : if username is more then 0 then enter another username else go to next step match password

    if($num > 0)
    {
        $error = "username is already present in our database so please request try another username..";
    }
    else
      
    //step7: if username is equal to zero then check and match password and confirm password
    {
      if( $password == $cpassword )

      {
          // step8: if password are match then its create password hash then insert into the database

          $hash = password_hash($password, PASSWORD_DEFAULT);

          $sql= "INSERT INTO `singup` ( `username`,`email`, `password`, `create_date`) VALUES ('$username','$email' ,'$hash', CURRENT_TIMESTAMP)";
          $result= mysqli_query($conn,$sql);

          if($result)
          {
              $success = true;
              // header('location:login.php');
          }
        }
          else
          {
              $error = "password do not match plaese enter same password";
          }
      
    }
    

}


?>

<!-------->

<?php

//step1: define error

$successlogin = false;
$errorlogin = false;

// step2: connecting to databse

include 'includes/conn.php';

//step3 : server goes to request post

if(isset($_POST['login']))
{
    
    // step4: vararble declare
    // $username = mysqli_real_escape_string($conn, $_POST['username']);
    $username = $_POST['username'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //step5 : check this username is present or not if present then verfiy the password else invalid username

    $usercheck = "SELECT * FROM `singup` WHERE `email` = '$email'";
    $ress = mysqli_query($conn,$usercheck);
    $num =mysqli_num_rows($ress);

    if( $num ==1)
    {
        // step6: verify the password
        while($row = mysqli_fetch_array($ress))

        {
            if(password_verify($password, $row['password']))
            {

                $successlogin = true;

                session_start();
                $_SESSION['loggdin']= true;
                $_SESSION['email']= $email;
                $_SESSION['username'] = $row['username'];
                header('location:index.php');
            }
            else
            {
                $errorlogin ="password do not match";
            }
        }
    }
    else
    {
        $errorlogin = "INVALID!.. this username is doesn't exist";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css" />
    <title>Login System</title>
  </head>
  <body>
<!----   the error or scucess of singup page----->

<?php
if($success)
{
  echo '<div class="alert success">
        <span class="closebtn">&times;</span>  
        <strong>Success!</strong> Your Account Created Successfully .
        </div>';
}
?>

<?php 
if($error)
{
  echo '<div class="alert">
        <span class="closebtn">&times;</span>  
        <strong>Sorry!</strong> '. $error.'
        </div>';
}
?>

<!-------The error and sucess of login page------------------>

<?php
if($successlogin)
{
  echo '<div class="alert success">
        <span class="closebtn">&times;</span>  
        <strong>Welcome!</strong>  You are loggdin.
        </div>';
}
?>

<?php
if($errorlogin)
{
  echo '<div class="alert">
        <span class="closebtn">&times;</span>  
        <strong>Sorry!</strong> '. $errorlogin.'
        </div>';
}
?>



<div class="container">

  <div class="forms-container">

      <div class="signin-signup">

          <!--- Login In Form Detail------------------------------------------------>
          <form action="" class="sign-in-form" method="POST">
            
              <h2 class="title">Login In</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>

            <input type="submit" name="login" value="Login" class="btn solid" >

            <p class="social-text">Or Login with social platforms</p>
            
            <div class="social-media">
              
              <a href="https://www.facebook.com/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.twiter.com/" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="https://www.google.com/" class="social-icon"><i class="fab fa-google"></i> </a>
              <a href="https://www.linkedin.com/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>

            </div>
          </form>

          <!--Singup Form Detail------------------------------------------------------->

          <form action="" class="sign-up-form" method="POST">

              <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="cpassword" placeholder="Cofirm Password" required>
            </div>

            <input type="submit" name="singup" class="btn" value="Sign up" >

            <p class="social-text">Or Sign up with social platforms</p>

            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.twitter.com/" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="https://www.google.com/" class="social-icon"><i class="fab fa-google"></i></a>
              <a href="https://www.linkedin.com/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>

          </form>

      </div>
  </div>

    <div class="panels-container">

        <div class="panel left-panel">

          <div class="content">
              <h3>Welcome to our Save Life World!</h3>
              <p>If you don't have a account then please Singup.</p>
              <button class="btn transparent" id="sign-up-btn">Sign up </button>
          </div>

          <img src="image/login.svg" class="image" alt="" />

        </div>

        <div class="panel right-panel">

          <div class="content">
              <h3>Welcome to our Save Life World!</h3>
              <p>Please filled your login id and go to the Save Life World ! </p>
              <button class="btn transparent" id="sign-in-btn">Login</button>
          </div>

          <!-- <img src="image/register.svg" class="image" alt="" /> -->
          <img src="image/singup.svg" class="image" alt="" />

        </div>
    </div>
</div>
    
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
  </body>
</html>
