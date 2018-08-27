<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>

<div>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		#c-start{
			padding-top:70px;
		}
		.info-div {
  			position: absolute;
			width: 100%;
		 	margin-top: -100px;
			z-index: 10;
			height: 100%;
			max-height: 1340px;
			overflow-y: scroll;
		}
	</style>
  	<title>VSR-very secret recipie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script src="nav.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navMenu">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#">VSR-VerySecretRecipie</a>
		</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
    		<ul class="nav navbar-nav">
    			<li class="active"><a href="./hai.php">Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Veg items</a></li>
                        <li><a href="#">Nonveg items</a></li>
						<li><a href="#">Snacks</a></li>
                        <li><a href="#">Sweets</a></li>
					</ul>
      			</li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Feedback</a></li>
				<li><a href="#">My Recipie</a></li>
      		</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.html"><span class="glyphicon glyphicon-log-in"</span> Login</a></li>
			</ul>
    	</div>
  	</div>
</nav>
  
<div class="container-fluid text-center" id="c-start">    
	<div class="row content">
    	<div class="col-sm-2 sidenav">
			<h4>Kerala</h4>
			<p><a href="./OnamSpcl.php">Onam Special</a></p>
			<p><a href="./XmasSpcl.php">Christmas Special</a></p>
			<p><a href="#">Vishu Special</a></p>
			<p><a href="#">Eid Special</a></p>
			<p><a href="#">Easter Special</a></p>
    	</div>
		<div class="col-sm-8 text-left"> 
			
			<div class="col-sm-10" style="width:100%" >
			<table border="0" align="center">
				<form action='#' method="POST" id ="usrforms" >
				
					<tr><td><center><textarea rows="4" cols="100" class="form-control" 
													name="reviews" form="usrforms" placeholder="Reviews write here" ></textarea></center></td>											
				
					<td><center><Button name="reviewbtn" type="submit" style="margin:10px;" class="btn btn-success">Submit</Button></center></td></tr>
				
				</form>
			</table>	
				<hr/>
		</div>	
				
				
				
		</div>
		
		
			
	</div>
	</div>	
	
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
		
		if(isset($_POST["reviewbtn"]) )
		{
			$sp=$_POST['reviews'];
			$sql="INSERT INTO `cooking`.`reviews` (`review`) VALUES ('$sp');";
			if (!mysql_query($sql)) {
				die ('Error:' .mysql_error());
			}
			else
			{
				echo "<script>alert('Successfully sent the review');</script>";
			}
			mysql_close();
		}
		
		
		
		
			
	?>
	


		
</body>
</html>



