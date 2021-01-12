<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$id=$_POST["id"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	
//attempt insert query execution
	
$sql="INSERT INTO `profile`(`id`, `fname`, `lname`, `phone`, `email`, `address`) VALUES ('$id','$fname','$lname','$phone','$email','$address')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:addprofile.html");
		
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
//close connection
mysqli_close($conn);

?>