<!-- <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "placement");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname= mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname= mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mo = mysqli_real_escape_string($link, $_REQUEST['mo']);
$coid= mysqli_real_escape_string($link, $_REQUEST['coid']);
$cw = mysqli_real_escape_string($link, $_REQUEST['cw']);
$cd = mysqli_real_escape_string($link, $_REQUEST['cd']);
$sto = mysqli_real_escape_string($link, $_REQUEST['sto']);
$sp = mysqli_real_escape_string($link, $_REQUEST['sp']);
$los = mysqli_real_escape_string($link, $_REQUEST['los']);
$nop = mysqli_real_escape_string($link, $_REQUEST['nop']);
$dead = mysqli_real_escape_string($link, $_REQUEST['dead']);
$os = mysqli_real_escape_string($link, $_REQUEST['os']);
$dl = mysqli_real_escape_string($link, $_REQUEST['dl']);
$jd = mysqli_real_escape_string($link, $_REQUEST['jd']);
$pto= mysqli_real_escape_string($link, $_REQUEST['pto']);
$skills = mysqli_real_escape_string($link, $_REQUEST['skills']);
$opt = mysqli_real_escape_string($link, $_REQUEST['opt']);
$spro = mysqli_real_escape_string($link, $_REQUEST['spro']);
$any = mysqli_real_escape_string($link, $_REQUEST['any']);
 
// attempt insert query execution
$sql = "INSERT INTO personal_details(fname, lname, email,mo , coid, cw,cd) VALUES ('$fname', '$lname', '$email','$mo','coid','cw','cd')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Round - 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="PostJob.css">
  </head>
  <body>
    <nav class="navbar  navbar-static-top example6" >
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
           <h4>Placement Portal</h4>
           <h6>Portal reg.</h6>
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
        <div  class="container-fluid col-lg-12" style="margin-top: -430px;">
          <div class="card" style="width:80%; height: 1825px;">
            <div class="col-lg-12">

              <div class="col-md-12">
                <a href="#">
                <span><i class="fas fa-home"></i></span>
                </a>
                <button type="button" class="btnmn" id="bt1"><a href="http://localhost/rkuarch/personaldetail.php" >Personal Details</a></button>
                <button type="button" class="btnmn" id="bt2"><a href=" http://localhost/rkuarch/collegedetails.html">College  Details</a></button>
                <button type="button" class="btnmn" id="bt3">Test Apply</button>
              <!-- </div> -->
              <!-- <div class="col-md-8 col-sm-6" style="margin-left:50%;"> -->
                <button type="button" class="btnmn" id="bt4" name="button" style="margin-left:13%;">Dashboard</button>
                
                <button type="button" class="btnmn" id="bt6" name="button">LogOut</button>
              </div>
            </div>
            <br>
             <hr>
             <div class="card" style="width:80%;  margin-top:5%; padding:3%;">
                 <div class="container">
                   <div class="c-head">
                     <h4>Round - 1</h4>
                     <hr>
                   <form>
                     <div  name="sto" >
                        <label for="usr" name="sto">Select Type Of Offers</label><br>
                        
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                         Job
                        </label>

                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                         Intrenship Only
                        </label>

                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                         Job and Intrenship 
                        </label>

                     </div>
                      
                     <div class="form-group" name="sp">
                       <label for="usr" name="sp">Select Primary Profile</label>
                       <input list="Profile" type="text" class="form-control" id="usr" placeholder="Java Developer" style=" background-color:#D1D1D1; width:60%;">
                       <datalist id="Profile">
                        <option value="Java Developer">
                        <option value="Frontend Developer">
                        <option value="Backend Developer">
                        <option value="Full Stack Developer">
                        <option value="IOS Developer">
                      </datalist>
                     </div>
                     <div class="form-group" name="los">
                       <label for="emial" name="los">Location(s)</label>
                       <input type="email" class="form-control" id="email" placeholder="City Name" style="background-color:white; width:60%;">
                     </div>
                     <div class="form-group" name="nop">
                      <label for="emial" name="nop">Desire Position(offer)</label>
                      <input type="text" class="form-control" id="text" placeholder="Enter desired position" style="background-color:white; width:60%;">
                     </div>
                     <div class="form-group" name="dead">
                       <label for="emial" name="dead">Date of college passout</label>
                       <input type="text" class="form-control" id="text" placeholder="dd-mm-yyyy" style="background-color:white; width:60%;">
                     </div>
                     <div class="form-group" name="date">
                      <label for="emial" >Date Of Submission</label>
                      <input type="text" class="form-control" id="text" placeholder="Day-Month-Year" style="background-color:white; width:60%;">
                     </div>
                     <div class="form-group" name="os">
                      <label for="usr" name="os">Organization Sector</label>
                      <input list="Sector" name="dl" type="text" class="form-control" id="usr" placeholder="Write your sector" style=" background-color:#D1D1D1; width:60%;">
                      <datalist id="Sector">
                       <option value="Java Developer">
                       <option value="Frontend Developer">
                       <option value="Backend Developer">
                       <option value="IOS Developer">
                       <option value="Full Stack Developer">
                     </datalist>
                     </div>
                     <div class="form-group" name="jd">
                       <label for="comment" name="jd">Job Discription</label>
                       <textarea class="form-control" name="jd" rows="5" id="comment" style="width:60%;"></textarea>
                     </div>
                     <div class="form-group" name="pto">
                      <label for="usr" >Package to offer</label>
                      <input type="text"  name="pto" class="form-control" id="email" placeholder="LPA(in INR)" style="background-color:white; width:60%;">
                     </div>
                     <div class="from-group">
                       <label for="usr">Skills that you are looking for</label>
                       <input type="text" name="skills" class="form-control" style="background-color:white; width: 60%">
                     </div>
                     <div style="margin-top:10px" name="opt">
                      <label for="usr">Experience ( in years)</label><br>
                      
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label  class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">1</label>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">2</label>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label  class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">3</label>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">4</label>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label  class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">6</label>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label  class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">7</label>
                      <input    class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">8</label>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">9</label>
                      <input  class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label  class="form-check-label1" for="exampleRadios1" style="padding:0.5%;">10</label>
                     </div> 
                     <div name="spro">
                      <label for="usr" style="margin-top:20px;">Selection Process</label>
                      <div class="checkbox" style="padding:0.5% 0.5% 0.5% 0;">
                       <label><input type="checkbox" value="" style="height: 25px; width:25px; ">&nbsp;&nbsp;Shortlist from Resumes</label>
                      </div>
                      <div class="checkbox" style="padding:0.5% 0.5% 0.5% 0;">
                       <label><input type="checkbox" value="" style="height: 25px; width:25px;">&nbsp;&nbsp;Written Test - Aptitute</label>
                      </div>
                      <div class="checkbox" style="padding:0.5% 0.5% 0.5% 0;">
                       <label><input type="checkbox" value="" style="height: 25px; width:25px;" >&nbsp;&nbsp;Group Discussion</label>
                      </div>
                      <div class="checkbox" style="padding:0.5% 0.5% 0.5% 0;">
                       <label><input type="checkbox" value="" style="height: 25px; width:25px;">&nbsp;&nbsp;Personal Interview(Technical+HR)</label>
                      </div>
                      <div class="checkbox" style="padding:0.5% 0.5% 0.5% 0;">
                       <label><input type="checkbox" value="" style="height: 25px; width:25px;">&nbsp;&nbsp;Written Test - Technical</label>
                      </div>
                      <div class="checkbox" style="padding:0.5% 0.5% 0.5% 0;">
                       <label><input type="checkbox" value="" style="height: 25px; width:25px;" >&nbsp;&nbsp;Others:</label>
                       <input type="text" id="fname" name="fname">
                      </div>
                     </div>
                     <div class="form-group" name="any">
                       <label for="comment">Any other details</label>
                       <textarea class="form-control" rows="7" id="comment" style="width:60%;"></textarea>
                     </div>
                      <div>
                      <input type="submit" name="submit" style="padding:6px 40px ; background-color:rgb(21, 208, 241); color:white; margin-left:45%;"><a href="file:///C:/xampp2/htdocs/rkuarch/image/thanks_for_submitting.html">redirect</a></button>
                     </div>
                   </form>
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
                 
                 
                 <div class="col-sm-3" >
                 <div class="col-sm-3" >
                 <div class="col-sm-3" >
                           <h4 class="h4">Placement Portal</h4>
                             <p class="f-para"> <br> </p>
                           <h4 class="h4">Phone:</h4>
                             <p class="f-para">+91-11-111111</p>
                           <h4 class="h4">Email </h4>
                             <p class="f-para">rku@placement.in</p>
                 </div>
              </div>
        </footer>


  </body>
</html>
