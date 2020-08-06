<?php 
include "config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  session_start();
  $_SESSION["email"]=$_POST["email"];
   $pass=$_POST["password"];
   $md_pass=md5($pass);
   $role=$_POST["role"];
  /*echo($_SESSION["email"]);
   echo("$pass");*/
   
  if($role=='Alumini')
  {
   $sql="SELECT * FROM tbl_alumni_lgn WHERE Username='{$_SESSION['email']}' and Password='$pass'";
  }
  elseif($role=='College')
  {
    $sql="SELECT Username,Password FROM tbl_clg_auth_lgn WHERE Username='{$_SESSION['email']}' and Password='$pass'";
  }
  elseif($role=='Directorate')
  {
    $sql="SELECT Username,Password FROM tbl_dir_lgn WHERE Username='{$_SESSION['email']}' and Password='$pass'";
  } 

   if($result=mysqli_query($link,$sql)) 
	 {
		 $row=mysqli_fetch_array($result);
		 if(($_SESSION["email"]===$row["Username"]) && ($pass===$row['Password'])) 
		 {

      echo '<script type="text/javascript">'; 
      echo 'alert("Login Successful!!");'; 
      if($role=='Alumini')
      {
        echo 'window.location.href = "alumini_dashboard.php";';
      }
      elseif($role=='College')
      {
        echo 'window.location.href = "college_dashboard.php";'; 
      }
      elseif($role=='Directorate')
      {
        echo 'window.location.href = "director_dashboard.php";';
      } 

      echo '</script>';
      
			exit();
	   }
   else
    {
     echo "<script type='text/javascript'>alert('Wrong Username Password Combination!!!!')</script>";
    } 
  }

}
$sql_query = "select * from tbl_gblnotice ORDER BY GN_id DESC LIMIT 1";
$result = mysqli_query($link,$sql_query);
$row = mysqli_fetch_array($result);
$notice=$row['Global_Notice'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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


  <nav class="navbar navbar-fixed-top" style="max-width: 100%;">
    <div class="container-fluid">
      <div class="navbar-header bg-success" style="width: 100%;">
        
        <div class="media bg-primary" style="width: 100%;">
          <div class="media-left media-middle">
            <img src="SCERT-Goa.jpg" class="media-object">
          </div>

          <div class="media-body" style="text-align: center;">
            <h1>Directorate of Higher Education, Goa</h1>
            <h3>Alumini Tracking System</h3>
          </div>          
        </div>
        <!--Registration Modal Start-->
        <form action="home_dashboard.php" method="post">
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <a href="#"><h4 class="modal-title w-100 font-weight-bold">Sign in</h4></a>
            </div>
            <div class="modal-body mx-3">

            <div class="md-form mb-5">
                <i></i>
                <label data-error="wrong" data-success="right" for="defaultForm-email">*Login Type</label>
                <select name="role" id="role" class="form-control validate">
                <option value="Alumini">Alumini</option> 
                <option value="College">College Authority</option> 
                <option value="Directorate">Directorate</option> 
                </select>
              </div><br>
      

              <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                <input type="email" id="defaultForm-email" class="form-control validate" name="email">
              </div><br>
      
              <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
              </div><br>
      
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success">Login</button>
            </div>
          </div>
        </div>
      </div>
      </form>
              <!--Registration Modal End-->
              <ul class="nav navbar-nav navbar-left bg-danger">
          
              <li>
                        <div class="Notice1">
                          <marquee><p><?php echo($notice)?></p></marquee>
                        </div>
                      </li>
                  <li><a href="#" data-toggle="modal" data-target="#modalLoginForm" style="background-color: aquamarine"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
                    <!-- <ul class="dropdown-menu">
                      <li class="text-center"><a href="#" data-toggle="modal" data-target="#modalLoginForm">Alumni</a></li>
                      <li class="text-center"><a href="#" data-toggle="modal" data-target="#modalLoginForm">College Authority</a></li>
                      <li class="text-center"><a href="#" data-toggle="modal" data-target="#modalLoginForm">Directorate</a></li>
                    
                    </ul> --> 
                    
                  </li>
                  <li class="text-center"><a href="Registration.php" style="background-color: aquamarine"><span class="glyphicon glyphicon-user"></span> Sign Up </a> </li>
                </ul>
      </div>
    </div>
  </nav>

  <div class="container h-100" style="margin-top:230px;width: 100%; height: 100%;">
    <div class="row h-100" style="height: 100%;">
      <div class="col-sm-2">
      <ul class="nav nav-pills nav-stacked navbar-dark" style="text-align: center; background-color:blanchedalmond;padding: 30px;">
            <li><a onclick="go('home.html')" class="focus">Home</a></li>
            <li><a onclick="go('colleges.php')">Colleges</a></li>
            <li><a onclick="go('gbl_event.php')">Events</a></li>
            <li><a onclick="go('gbl_notice.php')">Notices</a></li>
            <li><a onclick="go('ContactUs.html')">Contact Us</a></li>
        </ul>
      </div>
    
        <div class="col-sm-10 h-100" style="margin-top:0%;height: 1000% ">
                <iframe id="iframe_a" style="width:100%;height: 400px;outline: none;"  src="about:blank">
                </iframe>
      </div>
      </div>
      </div>
      
    <hr class="clearfix w-100 d-md-none pb-3">
    <footer class="page-footer font-small blue pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <div class="col-md-3 mt-md-0 mt-3">
          <i style='font-size:24px' class='fas'>&#xf3c5;</i>
          <h5 class="text-uppercase">Address</h5>
          <p>Directorate of Higher Education,
            SCERT Building,
            Alto, Porvorim-Goa 403521.</p>
        </div>
        
        <div class="col-md-3 mb-md-0 mb-3">
          <i style='font-size:24px' class='glyphicon glyphicon-phone-alt'></i>
          <h5 class="text-uppercase">Phone</h5>
          <p>0832-2415585/ 
            0832-2410824</p>
        </div>

        <div class="col-md-3 mb-md-0 mb-3">
          <i style='font-size:24px' class='fas'>&#xf0e0;</i>
          <h5 class="text-uppercase">Email</h5>
          <p>dir-dhe.goa@ac.in</p>
        </div>
      
        <div class="col-md-3 mb-md-0 mb-3">
          <i style='font-size:24px' class='fas fa-globe'></i>
          <h5 class="text-uppercase">WEBLINK</h5>
          <p>https://dhe.goa.gov.in/</p>
        </div>
      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Copyright ©2020 All rights reserved by 
      <a href="https://dhe.goa.gov.in/">dhe.goa.gov.in</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
    </iframe>
  </div>
  <script>
      document.getElementById('iframe_a').src = "home.html";
        function go(loc) {
          document.getElementById('iframe_a').src = loc;
        }
        </script>
</body>
</html>

