<?php 
include "config.php";
  echo "<script type='text/javascript'>alert(\"error in adding\");</script>";
  $name=mysqli_real_escape_string($link,$_POST['name']);
  $email=mysqli_real_escape_string($link,$_POST['email']);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DIH-Goa-Alumni</title>
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

    .btn{
      width: 340px;
    }

    .collap{
      width: 300px;
    }

    .btn:hover{
      background-color: rgb(32, 155, 32);
    }

    /* DropDown css start */

* {
  box-sizing: border-box;
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;  
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 15px;
  right: 15px;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

 /* DropDown css end */

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
        </div>
      </div>
    </nav>



    <div class="container" style="margin-top:200px;width: 100%;">
      <h1 style="text-align: center;font-weight: bold;">Sign Up</h1>
      <form autocomplete="off" class="form-horizontal" action="Registration.php" style="padding-top: 25px;" method='POST'>
        
        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="mob">Mobile Number:</label>
          <div class="col-sm-5">
            <input type="tel" class="form-control" id="mob" placeholder="Enter mobile number" name="mob">
          </div>
        </div>

        
        <div class="form-group" style="margin-left: 300px;" autocomplete="off">
          <label class="control-label col-sm-2" for="clg">College Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="clgname" placeholder="Enter college name" name="clg">
          </div>
        </div>

          
        <div class="form-group" style="margin-left: 300px;" autocomplete="off">
          <label class="control-label col-sm-2" for="year">Year of Passing:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="Year" placeholder="Enter year of passing" name="year">
          </div>          
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="course">Course Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="coursename" placeholder="Enter course name" name="course">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="prn">University PRN:</label>
          <div class="col-sm-5">          
            <input type="text" class="form-control" id="prn" placeholder="Enter university PRN" name="prn">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;"> 
          <label class="control-label col-sm-2" for="gender">Gender:</label>       
            <div class="radio">
                <label style="margin-left: 15px;"><input type="radio" name="gender" value="male"> Male</label>
                <label style="margin-left: 15px;"><input type="radio" name="gender" value="female"> Female</label>
                <label style="margin-left: 15px;"><input type="radio" name="gender" value="other"> Other</label>
            </div>
          </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="status">Current Status:</label>
          <div class="col-sm-5">
            <div class="container">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select
            <!-- <input type="text" class="form-control" id="status" placeholder="Enter current status" name="status"> -->
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <div class="container" style="width: 340px;">
                <li style="padding: 5px;"><button type="button" class="btn btn-info collap" data-toggle="collapse" data-target="#higherstudies">Further Studies</button></li>
                <li style="padding: 5px;"><button type="button" class="btn btn-info collap" data-toggle="collapse" data-target="#work">Work</button></li>
                <li style="padding: 5px;"><button type="button" class="btn btn-info collap" data-toggle="collapse" data-target="#startup">Own Startup</button></li>
                <li style="padding: 5px;"><button type="button" class="btn btn-info collap" data-toggle="collapse" data-target="#unemployed">Unemployed</button></li>
              </div>
            </ul>
          </div>
        </div>
        </div>
      </div>


        
      <div id="higherstudies" class="collapse">
        <h3 style="font-weight: bold;text-align: center;">Further Studies</h3>
        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="course">Course Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="coursename" placeholder="Enter course name" name="course">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;" autocomplete="off">
          <label class="control-label col-sm-2" for="clg">College Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="clgname" placeholder="Enter college name" name="clg">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="city">City:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="state">State:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="country">Country:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;" autocomplete="off">
          <label class="control-label col-sm-2" for="year">Year of Passing:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="Year" placeholder="Enter year of passing" name="year">
          </div>          
        </div>

      </div>

      <div id="work" class="collapse">
        <h3 style="font-weight: bold;text-align: center;">Work</h3>
        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="compname">Company Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="companyname" placeholder="Enter company name" name="compname">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="desig">Designation:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="desig">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="city">City:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="state">State:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="country">Country:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
          </div>
        </div>

      </div>

      <div id="startup" class="collapse">
        <h3 style="font-weight: bold;text-align: center;">Own Startup</h3>
        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="compname">Company Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="companyname" placeholder="Enter company name" name="compname">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="domain">Domain:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="domain" placeholder="Enter designation" name="domain">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="city">City:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="state">State:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
          </div>
        </div>

        <div class="form-group" style="margin-left: 300px;">
          <label class="control-label col-sm-2" for="country">Country:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
          </div>
        </div>

      </div>

      <div id="unemployed" class="collapse"></div>


        <div class="form-group" style="margin-left: 360px;margin-top: 20px;">        
          <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" class="btn btn-default btn-primary" id="submit" style="width: 100px;font-weight: bold;">Submit</button>
          </div>
        </div>
      </form>
    
      
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
          <i style='font-size:24px' class='fas'>&#xf095;</i>
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
          <i style='font-size:24px' class='far'>&#xf1cd;</i>
          <h5 class="text-uppercase">WEBLINK</h5>
          <p>https://dhe.goa.gov.in/</p>
        </div>
      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> DIH-Goa.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
  
  </div>

  <script>
    function autocomplete(inp, arr) {
      /*the autocomplete function takes two arguments,
      the text field element and an array of possible autocompleted values:*/
      var currentFocus;
      /*execute a function when someone writes in the text field:*/
      inp.addEventListener("input", function(e) {
          var a, b, i, val = this.value;
          /*close any already open lists of autocompleted values*/
          closeAllLists();
          if (!val) { return false;}
          currentFocus = -1;
          /*create a DIV element that will contain the items (values):*/
          a = document.createElement("DIV");
          a.setAttribute("id", this.id + "autocomplete-list");
          a.setAttribute("class", "autocomplete-items");
          /*append the DIV element as a child of the autocomplete container:*/
          this.parentNode.appendChild(a);
          /*for each item in the array...*/
          for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
              /*create a DIV element for each matching element:*/
              b = document.createElement("DIV");
              /*make the matching letters bold:*/
              b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
              b.innerHTML += arr[i].substr(val.length);
              /*insert a input field that will hold the current array item's value:*/
              b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
              /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
                  /*insert the value for the autocomplete text field:*/
                  inp.value = this.getElementsByTagName("input")[0].value;
                  /*close the list of autocompleted values,
                  (or any other open lists of autocompleted values:*/
                  closeAllLists();
              });
              a.appendChild(b);
            }
          }
      });
      /*execute a function presses a key on the keyboard:*/
      inp.addEventListener("keydown", function(e) {
          var x = document.getElementById(this.id + "autocomplete-list");
          if (x) x = x.getElementsByTagName("div");
          if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
          } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
          } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
              /*and simulate a click on the "active" item:*/
              if (x) x[currentFocus].click();
            }
          }
      });
      function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
      }
      function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
          x[i].classList.remove("autocomplete-active");
        }
      }
      function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
          if (elmnt != x[i] && elmnt != inp) {
            x[i].parentNode.removeChild(x[i]);
          }
        }
      }
      /*execute a function when someone clicks in the document:*/
      document.addEventListener("click", function (e) {
          closeAllLists(e.target);
      });
    }
    
    /*An array containing all the country names in the world:*/
    var collegenames = ["College of Education, Ponda","Government College of Arts,Science and Commerce, Goa"];
    var years = ["1995","1996","1997","1998","1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019"];
    var courses = ["Information Technology","Computer","Mechanical","Electrical","Civil"];

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("clgname"), collegenames);
    autocomplete(document.getElementById("Year"),years);
    autocomplete(document.getElementById("coursename"),courses);
    </script>

</body>
</html>

