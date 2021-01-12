<?php
 require_once 'config.php'; ?>

<?php
//escape user inputs for security
if(isset($_POST["edit"])){
     
   
     $id = $_GET["id"];
	$item=$_POST["item"];
	$brand=$_POST["brand"];
	$company=$_POST["company"];
	$date=$_POST["date"];
	$phone=$_POST["phone"];
	$price=$_POST["price"];
//attempt insert query execution
 $sql = "UPDATE `fan` SET `id`='$id',`item`='$item',`brand`='$brand',`company`='$company',`date`='$date',`phone`='$phone',`price`='$price' WHERE id = '$id'";	
 $result = mysqli_query($conn,$sql);
	
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
                    <a href="addproduct.html" class="navbar-brand">Back</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
					    <li><a href="index A.html">HOME</a></li>

                        <li><a href="addproduct.html">ADD PRODUCTS</a></li>
                        <li><a href="Contact us.html">Requests</a></li>
						

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

		$s= "SELECT * FROM fan";
		$result=$conn->query($s);		
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
				{
					$id=$row["id"];

					 $item=$row["item"]; 
					  $brand=$row["brand"]; 
                     $company=$row["company"];
                     $date=$row["date"]; 
                     $phone=$row["phone"]; 
				     $price=$row["price"]; 
					
					
				}
				
		}
		
}
		
	
	
	?>


<form action="" method="post">
<div class = "set1">
<br/><br/>

	id
    <input type="text" name="id" value = "<?php echo $id ?>" /><br/><br/>
	
	Item name
    <input type="text" name="item" value = "<?php echo $item ?>" /><br/><br/>
	
	Brand
    <input type="text" name="brand" value = "<?php echo $brand ?>" /><br/><br/>
	
	 company<br/>
    <input type="text" name="company" value = "<?php echo $company ?>" /><br/><br/>
  
	date<br/>
    <input type="date" name="date" value = "<?php echo $date ?>" /><br/><br/>

	phone <br/>
    <input type="text" name="phone" value = "<?php echo $phone ?>" /><br/><br/>
	
	price<br/>
	  <input type="text" name="price" value = "<?php echo $price ?>" /><br/><br/>
	
</div>

<div class = "set3">
	<br/><br/>	
	<br/><br/>
	


	<input type="submit"  class='button' id="btn1" name ="edit" value="Update Item"/>
</div>	
</form>
	
</body>
</html>



<?php
//close connection
mysqli_close($conn);

?>