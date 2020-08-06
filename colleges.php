<?php
include "config.php";
$sql1="SELECT * FROM tbl_clg where Clg_Type='Govt'";
$result = mysqli_query($link,$sql1);
$disp1="";
while($row = mysqli_fetch_array($result))
{
    
    $disp1=$disp1."<tr>
    <td>".$row['Clg_Id']."</td>
    <td>".$row['College_Name']."</td>
    <td>".$row['College_Code']."</td>
    <td>".$row['Address']."</td>
  </tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DIH-Goa-Colleges</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">Government Colleges</h2><br>

   
    
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr No.</th>
        <th>College Name</th>
        <th>College Code</th>
        <th>Address</th>
      </tr>
    </thead>

    <tbody>
    <?php
    echo("$disp1");
    ?>
    </tbody>

  </table>

  <br>
  <h2 style="text-align: center;">Non-Government Colleges</h2><br>
   <?php
   $sql2="SELECT * FROM tbl_clg where Clg_Type='Non-Govt'";
   $result = mysqli_query($link,$sql2);
   $disp2="";
   while($row = mysqli_fetch_array($result))
   {
       
       $disp2=$disp2."<tr>
       <td>".$row['Clg_Id']."</td>
       <td>".$row['College_Name']."</td>
       <td>".$row['College_Code']."</td>
       <td>".$row['Address']."</td>
     </tr>";
   }
   ?>  

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr No.</th>
        <th>College Name</th>
        <th>College Code</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
        <?php
      echo("$disp2");
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
