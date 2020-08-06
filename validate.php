<?php 
include "config.php";
session_start();
$email=$_SESSION["email"];
$sql_query = "select * from tbl_clg_auth_lgn where Username='".$email."'";
$result = mysqli_query($link,$sql_query);
$row = mysqli_fetch_array($result);
$cl_id=$row['Clg_Id'];

$sql_query = "select * from tbl_clg Where Clg_Id='".$cl_id."' ";
$result = mysqli_query($link,$sql_query);
$row = mysqli_fetch_array($result);
$clg_name=$row['College_Name'];

$sql_query = "select * from tbl_registration where College_Name='".$clg_name."'";
$result = mysqli_query($link,$sql_query);
$disp="";
while($row = mysqli_fetch_array($result))
{
    //echo "<script type='text/javascript'>alert(\"hi\");</script>";
    $name=$row['Name'];
    $mob=$row['Mobile_No'];
    $Prn=$row['Uni_PRN'];
    $id=$row['R_id'];
    $disp=$disp."<div class='card bg-light text-dark' style='margin: 10%;'>
    <div class='card-body'>
        <pre>
            Name:".$name."
            <br>
            University PRN:".$Prn."
            <br>
            Mobile No:".$mob."
        </pre>
            <form action='validate.php' method='POST' style='margin-left: 10%;'>  
                <button type='submit' class='submitbtn' name='$id' style='width:30%;margin:5%;'>Validate</button>
                <button type='submit' class='submitbtn' name='$Prn' style='width:30%;margin:5%;'>Discard</button>
            </form>
    </div></div>";
}
$sql_query = "select * from tbl_registration where College_Name='".$clg_name."'";
$result = mysqli_query($link,$sql_query);
while($row = mysqli_fetch_array($result))
{
    $Prn=$row['Uni_PRN'];
    $id=$row['R_id'];
    $name=$row['Name'];
    $email1=$row['Email'];
    $Mob=$row['Mobile_No'];
    $clg_name=$row['College_Name'];
    $Dept=$row['Department'];
    $Yop=$row['Year_of_Passing'];
    $Current=$row['Current_Status'];
    $Gender=$row['Gender'];
    $pass=$row['Password'];
    echo "<script type='text/javascript'>alert(\"$email1 $pass\");</script>";
    if(isset($_POST[$id])){
        echo "<script type='text/javascript'>alert(\"Validate $id\");</script>";
        
        $sql = "INSERT INTO tbl_alumni (A_Name, A_Email, A_Mobile_Number, College_Name, Year_of_Passing, Department, Uni_PRN, Current_Status, Gender) VALUES ('$name','$email1','$Mob','$clg_name','$Yop','$Dept','$Prn','$Current','$Gender')";
        
        if(mysqli_query($link,$sql))
        {

            $sql = "INSERT INTO tbl_alumni_lgn (Username,Password) VALUES ('$email1','$pass')";
            if(mysqli_query($link,$sql))
            {
                echo "<script type='text/javascript'>alert(\"alumini added in login table\");</script>";
                echo "<script type='text/javascript'>alert(\"Validation added\");</script>";
                $sql = "DELETE FROM tbl_registration WHERE R_id='".$id."'";
                $result = mysqli_query($link,$sql);
            }

           


        }
        else{
            echo "<script type='text/javascript'>alert(\"error in adding\");</script>";
        }
    }

    if(isset($_POST[$Prn])){
        echo "<script type='text/javascript'>alert(\"Discard $id\");</script>";
        $sql = "DELETE FROM tbl_registration WHERE R_id='".$id."'";
        $result = mysqli_query($link,$sql);
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
 
<div class="container" style="width: 70%;">
    <h1 style="text-align: center;">Validate Alumini</h1>
 <?php
 echo($disp);?>
</div>

</body>
</html>
