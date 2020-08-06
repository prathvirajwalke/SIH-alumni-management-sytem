
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
    $title=$title."-".$Info;
    $date1=date("Y/m/d");
    $sql = "INSERT INTO tbl_notice (Notice,P_Date, Clg_Id) VALUES ('$title','$date1','$cl_id')";
    if(mysqli_query($link,$sql))
    {
    echo "<script type='text/javascript'>alert(\"Notice added\");</script>";
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
  
        <form action='add_clg_notice.php' method='POST'>
                <div class="container">
                  <h1>Add notice:</h1>
                  <hr>
              
               <b>Subject</b><br><input type="text" placeholder="Enter Notice title here" name="subject" required style="width:70%;">
               <br><br>
              <b>Text</b>
              <br>
              <textarea name="msg" placeholder="Type your Notice here." cols="40" rows="7" style="width:70%;"></textarea>
            
            <button type="submit" class="submitbtn" name="submit" style="width:70%">Add notice</button>
              
              </form>

</body>
</html>
