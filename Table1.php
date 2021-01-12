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
  padding: 3px 1px;
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
                         <li><a href="Table6.html">Requests</a></li>
						

                    </ul>
                </div>
            </div>
        </nav>
    </header>






</head>
<body>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<br><br><br>
	<center>
	<div class="w3-container">
	<div class="table">
	
	
	<table border="1"  class="w3-table-all w3-hoverable" cellpadding="35" width="55%" id="tt">
		<thead>
      <tr class="w3-light-grey">
			
			  <th class="T_font"> Item </th>

                <th class="T_font">Watt</th>

                <th class="T_font"> Company</th>
                <th class="T_font">Date</th>
				
                <th class="T_font"> Phone number</th>
                <th class="T_font">Price</th>
		</tr>
		
	<?php
		
	
		$sql = "SELECT * FROM ledproduct";
		$result=$conn->query($sql);
		
		
		if($result->num_rows>0)
		{
				
				
				
				
				
				while($row=$result->fetch_assoc())
				{
					$id=$row["id"];

					echo "<tr><td>".$row["id"]."</td>";
					 echo "<td>" . $row["watt"] . "</td>";
                    echo "<td>" . $row["company"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
				    echo "<td>" . $row["price"] . "</td>";
					echo "<td><button type= 'submit' class='button'><a href='editRecord1.php?id=$id'>Edit</a></button></td>";
					echo "<td><button type='submit' class='button button3'><a href='Delete.php?id=$id'>Delete</a></button></td></tr>";
					
				}
				
		}
		else
		
		{
			echo "0 results";
		
		}
		echo"</table>";
		$conn->close();
	
	
	?>
		
		
		
		
		
		
	
	</div>
	</div>
	</center>
	
	<br><br><br>
	
	
	<hr>
	
	
	




</body>