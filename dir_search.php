<?php 
include "config.php";
$disp="";
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($link,$_POST['name']);
$year=mysqli_real_escape_string($link,$_POST['year']);
$sql_query = "select * from tbl_alumni where A_Name='".$name."' and  Year_of_Passing='".$year."' ";
$result = mysqli_query($link,$sql_query);

if($row = mysqli_fetch_array($result))
{
$email=$row['A_Email'];
$n=$row['A_Name'];
$mob=$row['A_Mobile_Number'];
$disp="<br><br>Name: ".$n."<br><br>Email: ".$email."<br><br>Mobile no: ".$mob."<br><br>";
}
else
{
    $disp="<br><br>No result Found.";
}
}?>
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
  
        <form action='dir_search.php' method='POST'>
                <div class="container">
                  <h1>Search alumini</h1>
                  <hr>
              
               <b>Full Name</b><br><input type="text" placeholder="Enter Full Name" name="name" required style="width:50%;">
               <br><br>
              <br>
              <b>Passing year:</b><br>
              <input type="text" placeholder="Enter passing year" name="year" required style="width:50%;">
              <br>
              <br>
            <button type="submit" class="submitbtn" name="submit" style="width:50%">Search</button>
              
              </form>
            <?php echo("$disp")?>
</body>
</html>
