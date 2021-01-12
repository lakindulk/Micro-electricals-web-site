<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; color:aliceblue; }
		.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 19px 92px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}




.button2 {
  background-color: gray; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

    </style>
</head>
<body>

         <div class="#" style="background-image:url('img/backg3.jfif');">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

     <header>
        <nav class="navbar  navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">Micro Electricals</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">HOME</a></li>
						 <li><a href="createprofile.html">Create Profile</a></li>
                        <li><a href="Contact us.html">CONTACT US</a></li>
                        <li><a href="ABOUT us.html">ABOUT US</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

 <br>
    <br>
    <br>
    <br>
    <br>
    <br>   

    <div class="page-header">
        <h1>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to MICRO Electricals .</h1>
    </div>

 <br>
    <br>
    <br>
    <br>
    <br>
    <br>   

		
    <p>
	    <a href="index.html"><button class="button button2">HOME</button></a></br>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

    <br>
    <br>
    <br>
    <br>
     <footer>
        <div class="container">
            <center>
                Copyright © MICRO Electricals . All Rights Reserved
            </center>
        </div>
    </footer>
</body>
</html>