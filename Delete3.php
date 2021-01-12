<?php
include_once 'config.php';
?>

<?php 
 $id = $_GET['id'];

 $sql = "DELETE FROM normal WHERE id = '$id'";

if(mysqli_query($conn,$sql)){
	header("location:Table3.php");
}
else{
	echo "<script>alert('Try Again')</script>";
}
//close connection
mysqli_close($conn);
?>