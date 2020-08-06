<?php 
include "config.php";

session_start();
$email=$_SESSION["email"];
$sql_query = "select * from tbl_alumni where A_Email='".$email."'";

$clg_id=1;
$sql_query = "select * from tbl_alumni where A_Email='".$email."'";
$result = mysqli_query($link,$sql_query);
$row = mysqli_fetch_array($result);
$name=$row['A_Name'];
$no=$row['A_Mobile_Number'];
$Clg_name=$row['College_Name'];
$dept=$row['Department'];
$yop=$row['Year_of_Passing'];
$current=$row['Current_Status'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DIH-Goa-My Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style> 
    .media-object{
      height: 165px;
      width: 197px;
    }
    .Notice1{
      background-color: rgb(165, 231, 215);
      font: bold;
      font-size: large;
      text-align: center;
      position: fixed;
      padding: 5px;
      width: 100%;
    }
    .modal-backdrop {
      z-index: -1;
    }

    .profile-header-container{
    margin: 0px;
    text-align: center;
}

.profile-header-img {
    padding: 0px;
}

.profile-header-img > img.img-circle {
    width: 120px;
    height: 120px;
    border: 2px solid #51D2B7;
}

.profile-header {
    margin-top: 0px;
}

/**
 * Ranking component
 */
.rank-label-container {
    margin-top: -19px;
    /* z-index: 1000; */
    text-align: center;
}

.label.label-default.rank-label {
    background-color: rgb(81, 210, 183);
    padding: 5px 10px 5px 10px;
    border-radius: 27px;
}

table {
  border-collapse: collapse;
  width: 50%;
  margin-left: 20%;
  margin: 10%;
  
}

th, td {
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size: 130%;
  padding: 4%;
}


  </style> 

</head>
<body>

        <div class="col-sm-12" style="background-color:whitesmoke;margin-top: 1%;">
            <div class="profile-header-container">   
                <div class="profile-header-img">
                <img class="img-circle" src="dir.png">
                    <!-- badge -->
                    <div>
                        <h1><?php echo($name)?></h1>
                    </div>
                </div> 
            </div> 
                
            <table>
                <tr>
                  <th>Email</th>
                  <td><?php echo($email)?></td>
                </tr>
                <tr>
                  <th>Contact No</th>
                  <td><?php echo($no)?></td>
                </tr>
                <tr>
                  <th>College Name</th>
                  <td><?php echo($Clg_name)?></td>
                </tr>
                <tr>
                  <th>Department</th>
                  <td><?php echo($dept)?></td>
                </tr>
                <tr>
                  <th>Year Of Passing</th>
                  <td><?php echo($yop)?></td>
                </tr>
                <tr>
                    <th>Current Status</th>
                    <td><?php echo($current)?></td>
                  </tr>
              </table>
              </div>
    
    </div>
      </div>

   
</body>
</html>

