
<?php 
include "config.php";
session_start();
$email=$_SESSION["email"];
$sql_query = "select * from tbl_clg_auth_lgn where Username='".$email."'";
$result = mysqli_query($link,$sql_query);
$row = mysqli_fetch_array($result);
$cl_id=$row['Clg_Id'];

if(isset($_POST['submit'])){
    
    $title=mysqli_real_escape_string($link,$_POST['subject']);
    $Info=mysqli_real_escape_string($link,$_POST['msg']);
    
    $sql_query = "select * from tbl_clg Where Clg_Id='".$cl_id."' ";
    $result = mysqli_query($link,$sql_query);
    $row = mysqli_fetch_array($result);
    $clg_name=$row['College_Name'];

    $sql_query = "select * from tbl_alumni where College_Name='".$clg_name."'";
    $result = mysqli_query($link,$sql_query);
    while($row = mysqli_fetch_array($result))
    {
        $email=$row['A_Email'];
        require_once "vendor/autoload.php";
        $mail = new PHPMailer\PHPMailer\PHPMailer();
  //Enable SMTP debugging.
 //$mail->SMTPDebug = 3;                           
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();        
  //Set SMTP host name                      
  $mail->Host = "smtp.gmail.com";
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = true;                      
  //Provide username and password
  $mail->Username = "aluminimanager1000@gmail.com";             
  $mail->Password = "hello@10";                       
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";                       
  //Set TCP port to connect to
  $mail->Port = 587;                    
  $mail->From = "name@gmail.com";
  $mail->FromName = "Alumini Manager";
  $mail->addAddress("$email", "Recepient Name");
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $Info;
  $mail->AltBody = "";
  if(!$mail->send())
  {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<script type='text/javascript'>alert(\"Message has not been sent successfully to $email\");</script>";
  }
  else
  {
    echo "<script type='text/javascript'>alert(\"Message has been sent successfully to $email\");</script>";
  }
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
        <form action='' method='POST'>
                <div class="container">
                  <h1>Send email</h1>
                  <hr>
              
               <b>Subject</b><br><input type="text" placeholder="Enter subject here" name="subject" required style="width:70%;">
               <br><br>
              <b>Text</b>
              <br>
              <textarea name="msg" placeholder="Type your message here." cols="40" rows="7" style="width:70%;"></textarea>
            
            <button type="submit" class="submitbtn" name="submit" style="width:70%">Send mail</button>
              
              </form>

</body>
</html>
