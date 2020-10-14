<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

     
     $conn = mysqli_connect('localhost','ninegrap_ivcontactus','contactus@123','ninegrap_ivcontactus');// database connection
     
     require 'PHPMailer/PHPMailerAutoload.php';  //phpmailer required
     
     //get post data form form
    if(isset($_POST['full_name']) && isset($_POST['organization']) 
    && isset($_POST['country']) && isset($_POST['email']) 
    && isset($_POST['mobile_number']) && !empty($_POST['remarks'])){
    
      $fullname = $_POST['full_name'];
	 $organization = $_POST['organization'];
	 $country = $_POST['country'];
	 $email = $_POST['email'];
	 $mobilenumber = $_POST['mobile_number'];
	 $remarks = $_POST['remarks'];
	 
	 $sql = "INSERT INTO contactus(full_name,organization,country,email,mobile_number,remarks)
	 VALUES ('$fullname','$organization','$country','$email','$mobilenumber','$remarks')";
	 
	$result=mysqli_query($conn,$sql);
	//inbox message body
	$message = "<html>
    <head><meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
        <body>
       <h4>Contact Us User Details.</h4>
       <p>You Receive this email from user as the userdetails are</p>
       <br>
       ".$_POST['full_name']."
       <br>
       ".$_POST['organization']."
       <br>
       ".$_POST['country']."
       <br>
       ".$_POST['email']."
       <br>
       ".$_POST['mobile_number']."
       <br>
       ".$_POST['remarks']."
      </body>
    </html>";
     //Message body ends   
      
//Create a new PHPMailer instance
      $mail = new PHPMailer;
      $mail->IsSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'prernasinhabest93@gmail.com';
      $mail->Password = 'prernasinha@8';
      $mail->SMTPSecure = 'ssl';
      $mail->Port     = 465;
      $mail->setFrom('prernasinhabest93@gmail.com', 'Contact Us');
      $mail->addAddress('prernasinhabest93@gmail.com', 'care');
      $mail->Subject = 'Contact Us Query';
      $mail->isHTML(true);
      $mail->Body = $message;
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else {
    $msg="Your Query has been successfully submitted we will reach you soon";
    header("location:contactus.php?msg=".$msg);
}
}
?>