<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$id=$_POST["id"];
	$watt=$_POST["watt"];
		$nid=$_POST["nid"];
	$brand=$_POST["brand"];
	
	
//attempt insert query execution
	
$sql="INSERT INTO `cart`(`id`, `watt`,`nid`, `brand`) VALUES ('$id','$watt','$nid','$brand')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:products.html");
		
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