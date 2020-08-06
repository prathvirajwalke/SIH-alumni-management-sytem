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
    $sql = "INSERT INTO tbl_event (E_Title, E_Info, Clg_Id) VALUES ('$title','$Info','$cl_id')";
    if(mysqli_query($link,$sql))
    {
    echo "<script type='text/javascript'>alert(\"Event added\");</script>";
    }
    else{
        echo "<script type='text/javascript'>alert(\"Error\");</script>";
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
  
        <form action='add_event.php' method='POST'>
                <div class="container">
                  <h1>Add  Event:</h1>
                  <hr>
              
               <b>Subject</b><br><input type="text" placeholder="Enter Event title here" name="subject" required style="width:70%;">
               <br><br>
              <b>Text</b>
              <br>
              <textarea  name="msg" placeholder="Type event details here." cols="40" rows="7" style="width:70%;"></textarea>
            
            <button type="submit" class="submitbtn" name="submit" style="width:70%">Add Event</button>
              
              </form>

</body>
</html>
