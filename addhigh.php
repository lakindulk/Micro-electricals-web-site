<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$id=$_POST["id"];
	$watt=$_POST["watt"];
	$company=$_POST["company"];
	$date=$_POST["date"];
	$phone=$_POST["phone"];
	$price=$_POST["price"];
	
//attempt insert query execution
	
$sql="INSERT INTO `high`(`id`, `watt`, `company`, `date`, `phone`, `price`) VALUES('$id','$watt','$company','$date','$phone','$price')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:Table1.php");
		
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