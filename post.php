

<?php
//   $to = "ishfaqkhattak9@gmail.com";
//   $from = 'ishfaqkhattak9@gmail.com'; 
//   $fromName = 'Ask Online Lawyers'; 
   
//   $subject = "Welcome to Ask Online Lawyers"; 
   
//   $htmlContent = ' 
//       <html> 
//       <head> 
//           <title>Welcome ' . $fromName . ' to Ask Online Lawyers</title> 
//       </head> 
//       <body> 
//           <h1>Thanks you for joining with us!</h1> 
//           <p> Please update your profile and you can send any type of query under the section of Requests</p>
//       </body> 
//       </html>'; 
   
//   // Set content-type header for sending HTML email 
//   $headers = "MIME-Version: 1.0" . "\r\n"; 
//   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
   
//   // Additional headers 
//   $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
   
//   // Send email 
//   // try {
//   //   mail($to, $subject, $htmlContent, $headers);
//   //   return true;
//   // }catch(Exception $e) {
//   //   echo 'Message: ' .$e->getMessage();
//   // }
  

//   if(mail($to, $subject, $htmlContent, $headers)){ 
//       echo 'Email has sent successfully.'; 
//   }else{ 
//      echo 'Email sending failed.'; 
//   }
$to = 'ishfaqkhattak9@gmail.com';
$subject = $_POST["subject"];
$from = 'ishfaq@cybrone.com';
 $name=$_POST["name"];
 $body= $_POST["body"];
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h3 style="color:#f40;">Message from Ishfaq Online Resume</h3>';
$message .= '<h4 style="color:black;">Name : '.$name.'</h4>';
$message .= '<p style="color:black;font-size:18px;">Body : '.$body.' </p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>