<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>Onam Special</title>
<link rel="stylesheet" type="text/CSS" href="login.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=divice-width,initial-scale=1.0">
</head>
<body>


<div class="container" align="center">

	<div class="p-3 mb-2 bg-info text-white" align="center" style="height:100px vertical-align:center" >
		
		<h3 style="color:black"><b>ADMIN</b></h3>		
		
	
	</div>
	<div class="p-3 mb-2 bg-light text-white" align="right" style="height:100px vertical-align:center" >
		<form action="./reviewss.php" method="POST">
			<button type="submit" class="btn btn-success" align="left">Reviews</button>	
		</form>
		<form action="./hai.php" method="POST">
			<button type="submit" class="btn btn-success" align="left">Home</button>	
		</form>
	</div>
	<div class="container bg-light" align="center">
		<div class="bg-light text-dark" align="left" style="width:400px" >
		<form action='./onam.php' method="POST" id ="usrform">
		
			<ul><h4>Special:</h4>  <select class="form-control" name="special" form="usrform">
									<option value="na">Not Applicable</option>
									  <option value="onam">Onam Special</option>
									  <option value="xmas">Christmas Special</option>
										<option value="vishu">Vishu Special</option>
										<option value="eid">Eid Special</option>
										<option value="easter">Easter Special</option>
										<option value="mr">My Recipe</option>										
										</select> <br></ul>
			<ul><h4>Name:</h4> <input type="text" name="name" class="form-control" required><br></ul>
			
			<ul><h4>Description:</h4> <textarea rows="4" cols="50" class="form-control" 
												name="desc" form="usrform" placeholder="Enter preparation here..." required></textarea><br></ul>
			<ul><h4>Category:</h4>  <select class="form-control" name="category" form="usrform">
										  <option value="veg">Vegetarian</option>
										  <option value="nonveg">Non-Vegetarian</option>										
										</select> <br></ul>
			<ul><h4>Types:</h4>  <select class="form-control" name="types" form="usrform">
										  <option value="na">Not Applicable</option>
										  <option value="pks">Pickles</option>
										  <option value="sks">Snacks &amp; Sweets</option>
										  
										</select> <br></ul>
			<ul><h4>Ingredients:</h4> <textarea rows="4" cols="50" class="form-control" 
												name="ing" form="usrform" placeholder="Enter ingredients here..." required></textarea><br></ul>
			<ul><h4>Image Url:</h4> <textarea rows="2" cols="50" class="form-control" 
												name="img" form="usrform" placeholder="Enter image url here" required></textarea><br></ul><br></ul>
			<ul><input type="submit" class="btn btn-info" name="anoop" value="Add Details" required></ul>
			
		</form>
	</div>
	
	
	</div>
</div>
</body>
<!-- <ul><h4>Description:</h4> <input type="text" name="desc" ><br></ul> -->

</html>

<?php
define('dbname','cooking');
define('dbuser','root');
define('dbpass','');
define('dbhost','localhost');

$con = mysql_connect(dbhost,dbuser,dbpass);
if (!$con){
	die( 'Could not connect:'.mysql_error());
	}
//echo "connected";
$dbselect=mysql_select_db(dbname,$con);
if(!$dbselect){
		die('cant connect'.mysql_error);
	}
	
if(isset($_POST["anoop"]) )
{
	$sp=$_POST['special'];	
	$name=$_POST['name'];
	$desc=$_POST['desc'];
	$image=$_POST['img'];
	$ing=$_POST['ing'];
	$cat=$_POST['category'];
	$type=$_POST['types'];

	$sql= "INSERT INTO `cooking`.`onam` (`name`, `desc`, `image_url`, `category`, `ingredients` , `special` , `types`) VALUES ('$name', '$desc', '$image', '$cat', '$ing', '$sp', '$type')";
	if (!mysql_query($sql)) {
		die ('Error:' .mysql_error());
	}
	echo "<script>alert('Successfully Added');</script>";
	 mysql_close();
	
}

?>	
