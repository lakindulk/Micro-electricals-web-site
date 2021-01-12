<?php
include_once "config.php";

//	$from=$_POST["from"];
//	$to=$_POST["to"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title> Highwatt PRODUCTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="style/style.css" rel="stylesheet">
	    <link href="style/slide.css" rel="stylesheet">
			    <link href="style/about us.css" rel="stylesheet">
			    <link href="style/form.css" rel="stylesheet">
<style>
.button {
  background-color: #0000FF; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 161px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #0000FF;
}

.button1:hover {
  background-color: #63C5DA;
color: white;}

.d {
  border: 1px solid gray;
  padding: 8px;
}

.h {
	text-indent: 30px;
  text-align: justify;
  text-transform: uppercase;
  color: Black;
}

.p {
  text-indent: 80px;
  text-align: justify;
  letter-spacing: 3px;
}
</style>


</head>

<body>

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

                        <li><a href="products.html">PRODUCTS</a></li>
                        <li><a href="Contact us.html">CONTACT US</a></li>
						<li><a href="ABOUT us.html">ABOUT US</a></li>

												<li><a href="addprofile.html">PROFILE</a></li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>






</head>
<body>
	
	
	
	
	
	

	<br><br><br>
	<center>
	
	
	
<?php	
$sql = "SELECT * FROM profile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       /* echo "id : " . $row["id"]."<br>". "Name : " . $row["fname"]. " " . $row["lname"]. "<br>". "Contact Number : " . $row["phone"]. .   "Email : " . $row["email"]."<br>"."Address : " . $row["address"]."<br>";
		*/$id=$row["id"];
					 echo  "<h1 class='h'>"."id : " ."</h1>"."<h1 class='p'>".$row["id"] ."</h1>". "<br>";
					echo  "<h1 class='h'>"."Name : " ."</h1>"."<h1 class='p'>". $row["fname"]. " " . $row["lname"]."</h1>". "<br>" ;
				    echo   "<h1 class='h'>"."Contact Number : "."</h1>" ."<h1 class='p'>". $row["phone"]."</h1>". "<br>";
					  echo   "<h1 class='h'>"."Email : " ."</h1>" ."<h1 class='p'>".$row["email"]."</h1>". "<br>";
					 echo   "<h1 class='h'>"."Address : " ."</h1>" ."<h1 class='p'>".$row["address"]."</h1>". "<br>";
					echo  "<button type= 'submit' class='button button1'><a href='editprof.php?id=$id'>Edit</a></button>"."<br>";
    }
} else {
    echo "0 results";
}
	?>
	
		
		
		
		
		
		
	
	
	</div>
	</center>
	
	<br><br><br>
	
	
	<hr>
	
	
	




</body>



</html>

<?php
//close connection
mysqli_close($conn);

?>