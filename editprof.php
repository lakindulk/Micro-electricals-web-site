<?php
 require_once 'config.php'; ?>

<?php
//escape user inputs for security
if(isset($_POST["edit"])){
     
   
     $id = $_GET["id"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	
//attempt insert query execution
 $sql = "UPDATE `profile` SET `id`='$id',`fname`='$fname',`lname`='$lname',`phone`='$phone',`email`='$email',`address`='$address' WHERE id = '$id'";	
 $result = mysqli_query($conn,$sql);
	
	if($result){
		header("location:viewprofile.php");
		
	} else{
		echo "Error,No data input or Invalid data ";
	}
	
/*	if($conn->query($sql) == true){
		header("Location:Table1.php");
	}else{
		echo "<script>alert('Try Again')</script>";
	}
}*/
}
?>



<?php
include_once "config.php";

//	$from=$_POST["from"];
//	$to=$_POST["to"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>ADD LED PRODUCTS</title>
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
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 3px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button3 {background-color: #f44336;} /* Red */ 

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
                  <a href="index.html" class="navbar-brand">TSB HOLDINGS</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
					    <li><a href="index.html">HOME</a></li>

                        <li><a href="products.html">PRODUCTS</a></li>
                        <li><a href="Contact us.html">CONTACT US</a></li>
						<li><a href="ABOUT us.html">ABOUT US</a></li>

						

                    </ul>
                </div>
            </div>
        </nav>
    </header>






</head>
<body>






<?php	
if(isset($_GET['id'])){
$record = $_GET['id'];

		$s= "SELECT * FROM profile";
		$result=$conn->query($s);		
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
				{
					$id=$row["id"];

					 $fname=$row["fname"]; 
                     $lname=$row["lname"];
                     $phone=$row["phone"]; 
                     $email=$row["email"]; 
				     $address=$row["address"]; 
					
					
					
				}
				
		}
		
}
		
	
	
	?>
<br/><br/>	
	<br/><br/>

<form action="" method="post">
<div class = "set1">
<br/><br/>

	National ID:
    <input type="text" name="id" value = "<?php echo $id ?>" /><br/><br/>
	
	lname
    <input type="text" name="fname" value = "<?php echo $fname ?>" /><br/><br/>
	
	 lname<br/>
    <input type="text" name="lname" value = "<?php echo $lname ?>" /><br/><br/>
  
	phone<br/>
    <input type="text" name="phone" value = "<?php echo $phone ?>" /><br/><br/>

	email <br/>
    <input type="text" name="email" value = "<?php echo $email ?>" /><br/><br/>
	
	address <br/>
    <input type="text" name="address" value = "<?php echo $address ?>" /><br/><br/>
	
	
	
	
</div>

<div class = "set3">
	
	


	<input type="submit"  class='button' id="btn1" name ="edit" value="Edit"/>
</div>	
</form>
	
</body>
</html>



<?php
//close connection
mysqli_close($conn);

?>