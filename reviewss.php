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
		
		<h3 style="color:black"><b>USER REVIEWS</b></h3>		
		
	
	</div>
	<div class="p-3 mb-2 bg-light text-white" align="right" style="height:100px vertical-align:center" >		
		<form action="./onam.php" method="POST">
			<button type="submit" class="btn btn-success" align="left">Add Items</button>	
		</form>	
		<form action="./hai.php" method="POST">
			<button type="submit" class="btn btn-success" align="left">Home</button>	
		</form>
	</div>
	<div class="container bg-light" align="center">
		<div class="bg-light text-dark" align="left" style="width:400px" >
		
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
					
					$sql= "SELECT * FROM `reviews`";
					if (!mysql_query($sql)) {
						die ('Error:' .mysql_error());
					}
					
					$result = mysql_query($sql);
					
						
					?>
					<table border =1 align="center" style="width:100%">
					<tr align="center"><th align="center">Sl No</th><th align="center">Reviews</th></tr>
					
					<?php 
					$x=1;
					while($row = mysql_fetch_row($result))
						
					{ ?>
				
						<tr><td align="center"><?php echo $x ?></td><td align="center"><?php echo $row[1] ?></td></tr>
					
					
					<?php $x=$x+1;} ?>
					
					</table>
					
					<?php mysql_close($con); ?>
		
		
		
		</div>
	
	
	</div>
</div>
</body>
<!-- <ul><h4>Description:</h4> <input type="text" name="desc" ><br></ul> -->

</html>


