<?php
   
if(isset($_POST['submit'])){ 

  

$name = $_POST['name1'];
$email = $_POST['email2'];
$phone = $_POST['phone3'];
$city = $_POST['city4'];
$message = $_POST['message5'];
$formcontent=" From: $name \n Phone: $phone \n Email : $email \n City: $city \n Message: $message";
$recipient = "yagotimber@gmail.com";
$subject = "Request Free Design Consultation ";
$mailheader = 'From: info@yagotimber.com' . "\r\n" .
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "<script>alert('Thank You!.We will get to you asap.')</script>";
 header('Location:thankyou.html')
}
?>
