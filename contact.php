<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$id=$_POST["id"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	
//attempt insert query execution
	
$sql="INSERT INTO `contact`(`id`, `fname`, `lname`, `email`, `message`) VALUES('$id','$fname','$lname','$email','$message')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:Table5.php");
		
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