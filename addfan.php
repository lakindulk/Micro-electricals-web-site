<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$id=$_POST["id"];
	$item=$_POST["item"];
	$brand=$_POST["brand"];
	$company=$_POST["company"];
	$date=$_POST["date"];
	$phone=$_POST["phone"];
	$price=$_POST["price"];
	
//attempt insert query execution
	
$sql="INSERT INTO `fan`(`id`, `item`, `brand`, `company`, `date`, `phone`, `price`) VALUES('$id','$item','$brand','$company','$date','$phone','$price')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:Table4.php");
		
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