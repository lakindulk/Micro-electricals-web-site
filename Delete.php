<?php
include_once 'config.php';
?>

<?php 
 $id = $_GET['id'];

 $sql = "DELETE FROM ledproduct WHERE id = '$id'";

if(mysqli_query($conn,$sql)){
	header("location:Table1.php");
}
else{
	echo "<script>alert('Try Again')</script>";
}
//close connection
mysqli_close($conn);
?>