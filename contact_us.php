<?php

if(!isset($_SESSION))
{
    session_start();   

}
else
{
    header('location:contact_us.php');    
}


?>

<?php

$send = false;
$not_send = false;

require 'includes/conn.php';

if(isset($_POST['contact']))
{

    $fname =    mysqli_real_escape_string($conn, $_POST['fname']);
    $lname =    mysqli_real_escape_string($conn, $_POST['lname']);
    $email =    mysqli_real_escape_string($conn, $_POST['email']);
    $phone =    mysqli_real_escape_string($conn, $_POST['phone']);
    $message =  mysqli_real_escape_string($conn, $_POST['message']);

    $contactsql = "INSERT INTO `contactuspage` ( `first_name`, `last_name`, `email`, `mobileno`, `message`, `create_time`) VALUES ('$fname', '$lname', '$email', '$phone', '$message', CURRENT_TIMESTAMP)";
    $res = mysqli_query($conn, $contactsql);

    if($res)
    {
        $send ="Thank you...Your message has been recorded our database.";
    }
    else
    {
        $not_send ="Sorry...There are some problem please send again.";
    }
}
?>


<?php
 
 require 'includes/header.php';
 require 'includes/nav.php';
?>

<?php
//-------The error and sucess of login page------------------>
if($not_send)
 {
   echo '<div class="alert">
         <span class="closebtn">&times;</span>  
         <strong>Sorry!</strong> '. $not_send.'
         </div>';
}

?>
 
 <!-------The error and sucess of login page------------------>
 
<?php

if($send)
{
   echo '<div class="alert success">
         <span class="closebtn">&times;</span>  
         <strong>Thank You!</strong>  '. $send .'
         </div>';
}

?>


<div class="contact-message">
 
    <h1>Contact <span>us</span> </h1>
    <p>If you would like to discuss our solutions, please contact us and we will be happy to provide you with all the information you need.</p>
</div>
    <section>
        
    <div class="contact-container">
       
       <div class="Contactinfo">
            
          <div>
             <h2>Contact Information</h2>
                <ul class="info">
                  <li>
                      <span class="fa fa-map-marker"></span>
                      <span> Durgapur <br> State- West Bengal <br>
                            Pin no-497118</span>
                  </li>
                  <li>
                        <span class="fa fa-phone"></span>
                        <span> +91 6294975324</span>
                  </li>
                  <li>
                        <span class="fa fa-envelope"></span>
                        <span>nehagupta9083@gmail.com</span>
                  </li>
                    
                </ul>
         </div>
         
                <ul class="icon">
                   <li><a href="https://www.facebook.com/" target="_blank"><span class="fa fa-facebook-f"></span></a></li>
                   <li><a href="https://www.twitter.com/" target="_blank"><span class="fa fa-twitter"></span></a></li>
                   <li><a href="https://www.instagram.com/" target="_blank"><span class="fa fa-instagram"></span></a></li>
                   <li><a href="https:www.linkedin.com/" target="_blank"><span class="fa fa-linkedin"></span></a></li>

                </ul>
                
            </div>
       
 <form method="POST" action="">

        <div class="ContactForm">
            <h2>Send a Message</h2>    
            <div class="formBox">
                <div class="inputBox w50">
                    <input type="text" name="fname" required>
                    <span>First Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="lname" required>
                    <span>Last Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="email" name="email" required>
                    <span>Email Address</span>
                </div>
                <div class="inputBox w50">
                    <input type="number" name="phone" required>
                    <span>Mobile Number</span>
                </div>
                <div class="inputBox w100">
                    <textarea name="message" required></textarea>
                    <span>Write your message here...</span>
                </div>
                <div class="inputBox w50">
                    <input type="submit" name="contact" value="Submit">
                    
                </div>

            </div>

        </div>
</form>
    </div>
    </section>

 <?php require 'includes/footer.php'; ?>   