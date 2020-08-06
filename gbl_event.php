<?php 
include "config.php";
$sql_query = "select * from tbl_event ORDER BY E_id ";
$result = mysqli_query($link,$sql_query);
$disp="";
while($row = mysqli_fetch_array($result))
{
    $title=$row['E_Title'];
    $info=$row['E_Info'];
    
    $disp=$disp."<div class='card bg-light text-dark' style='margin: 10%;'>
    <div class='card-body'><h1>".$title."</h1>
        <pre>".$info."</pre>
    </div>
  </div>";
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
    <h1 style="text-align: center;">Events</h1>

    <?php 
    echo($disp)
    ?>
  
</div>

</body>
</html>
