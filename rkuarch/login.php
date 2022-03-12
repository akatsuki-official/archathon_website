<!-- /*<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO login_user(name, psw) VALUES ('$name', '$psw')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
*/ -->

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
             border: 1px solid #000000; 
            height: 40vh;
            width: 360px;
            background: lightblue;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 200px;
        }
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 0px 0 15px 0;
            font: size 14px;
            background: #F5F5F5;
        }
        
        hr {
            border: 1px solid #e6e6e6;
            background: rgb(15, 150, 173);
            max-width: 360px;
            padding: 45px;
        }
        
        .registerbutton {
            background-color: #29a329;
            color: white;
            padding: 15px 20px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
            width: 100%;
            text-decoration: bold;
        }
    </style>
</head>

<body >
        <h1 align="center" style="color:brown">Login</a> User</h1>
    <form>
        <label for="name"><b>Username</label>
        <input type="text" placeholder="Enter Your Name" name="name" required><br>


        <label for="pwd"><b>Password</b></label>
        <input type="password" placeholder="Enter Your Password" name="psw" required><br>


        <button type="submit" class="registerbutton"><a href="http://localhost/rkuarch/personaldetail.php">Login</a></button>
        <p class="message">Not registerd?
            <a href="./registration.html">Register</a>
        </p>
    </form>


</body>

</html>