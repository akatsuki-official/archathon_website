/*
<?php

if(isset($_GET['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mo=$_POST['mo'];

$sql = "INSERT INTO personal_details (fname, lname, email,mo)
VALUES ('$fname','$lname','$email','$mo')";
$res = MYSQLI_QUERY($conn,$sqli);

if ($res) {
  echo "New record created successfully";
} else {
  echo "Error: ";
}

}
?>
*/




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Regestration Portal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="persnoldetail.css">
</head>

<body>
  <nav class="navbar  navbar-static-top example6">
    <div class="container">
      <div class="navbar-header" style="height:73px;">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar" style="background-color:skyblue;"></span>
          <span class="icon-bar" style="background-color:skyblue;"></span>
          <span class="icon-bar" style="background-color:skyblue;"></span>
        </button>
        <a class="navbar-brand" href="#">

        </a>
        <div class="headings">
          <h4>Placement portal</h4>
          <h6>Placement regestration</h6>
        </div>
      </div>
      <div id="navbar6" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" style="margin-top:2%;">

          <li><a href="#">ACADAMICS</a></li>
          <li><a href="#">POLICY</a></li>

          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>

  <!-- Details Section -->
  <div class="row loginAreaImage" style="margin-left:0;">
  </div>
  <div class="container-fluid col-lg-12" style="margin-top: -430px; margin-bottom:-100px">
    <div class="card" style="width:80%; height:600px;">
      <div class="col-lg-12">

        <div class="col-md-12">
          <a href="#">
            <span><i class="fas fa-home"></i></span>
          </a>
          <button type="button" class="btnmn" id="bt1">Personal Details</button>
          <button type="button" class="btnmn" id="bt2"><a
              href=" http://localhost/rkuarch/collegedetails.html">College Details</a></button>
          <button type="button" class="btnmn" id="bt3"><a
              href="http://localhost/rkuarch/Givetest.php">Test Apply</a></button>
          <!-- </div> -->
          <!-- <div class="col-md-8 col-sm-6" style="margin-left:50%;"> -->
          <button type="button" class="btnmn" id="bt4" name="button" style="margin-left:13%;"><a
              href="file:///H:/placement%20portal/rku%20archathon/personaldetail.html">Dashboard </a></button>

          <button type="button" class="btnmn" id="bt6" name="button">LogOut</button>
        </div>
      </div>
      <br>
      <hr>
      <div class="card" style="width:80%; margin-top:5%; padding:3%;">
        <div class="container">
          <div class="c-head">
            <h4>Personal Details</h4>
            <hr>
            <hr>
            <form action="" method="POST">

              <div class="form-group row" style="width:60%">
                <div class="col-xs-6">
                  <label for="ex1">First Name</label>
                  <input class="form-control" id="ex1" type="text" name="fname" style="background-color:#D1D1D1">
                </div>
                <div class="col-xs-6">
                  <label for="ex2">Last Name</label>
                  <input class="form-control" id="ex2" name="lname" type="text" style="background-color:#D1D1D1">
                </div>
              </div>
              <div class="form-group">
                <label for="emial">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="info@rku.org"
                  style="background-color:#D1D1D1; width:57.5%;">
              </div>
              <div class="form-group">
                <label for="emial">Mobile Number:</label>
                <input type="number" class="form-control" id="email" name="mo" placeholder="+00 000 000 0000"
                  style="background-color:white; width:57.5%;">
              </div>

              <!-- <input type="submit" name="button"
                style="padding:6px 40px; background-color:#128FF2; color:white; margin-left:48%; align:left;" value="submit" ><a href="http://localhost/rkuarch/collegedetails.html"></a> -->
               <p align="center">       <button type="button" class="btnmn" id="bt6" name="button" style="background-color:blue" ><a href="http://localhost/rkuarch/collegedetails.html">Next</a></button></p>
            
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="container-fluid col-lg-12">
      <div class="Blank" style=" margin:20%;">
      </div>
    </div>
  </div>
  <!-- Footer -->

  <footer class="container-fluid text-left">
    <div class="row">
      <div class="col-sm-3">

      </div>
      <div class="col-sm-3">
        <a href="#">

        </a>
        <br>
        <a href="#">
          <span class="spn">Our Students</span>
        </a>
        <br>
        <a href="#">
          <span class="spn">Acadamics</span>
        </a>
        <br>
        <a href="#">
          <span class="spn">Reasearch & Devlopment</span>
        </a>
        <br>
      </div>
      <div class="col-sm-3">
        <a href="#">
          <span class="spn">Recruiter login</span>
        </a>
        <br>
        <a href="#">
          <span class="spn">Student login</span>
        </a>
        <br>
        <a href="#">
          <span class="spn">Policy</span>
        </a>
        <br>
      </div>
      <div class="col-sm-3">
        <h4 class="h4">Placement Portal</h4>
        <p class="f-para"> <br> </p>
        <h4 class="h4">Phone:</h4>
        <p class="f-para">+91-11-11111</p>
        <h4 class="h4">Email </h4>
        <p class="f-para">rku@placement.in</p>
      </div>
    </div>
  </footer>


</body>

</html>