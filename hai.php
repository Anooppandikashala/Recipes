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
	<script>
		function myFunction() {
			var x = document.getElementById("hiddenitems");
			var y = document.getElementById("hiddenbtn");
			if (x.style.display == "none") {
				y.value = "View Less";
				y.innerHTML = "View Less";
				x.style.display = "block";
			} else {
				y.value = "View More";
				y.innerHTML = "View More";
				x.style.display = "none";
			}
		}
		function myFunction2() {
			var x = document.getElementById("hid");
			var y = document.getElementById("hiddenbtn2");
			if (x.style.display == "none") {
				y.value = "View Less";
				y.innerHTML = "View Less";
				x.style.display = "block";
			} else {
				y.value = "View More";
				y.innerHTML = "View More";
				x.style.display = "none";
			}
		}
	</script>
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
						<li><a href="./VegItems.php">Vegetarian Foods</a></li>
                        <li><a href="./NonVegItems.php">Non-Vegetarian Foods</a></li>
						<li><a href="#">Snacks &amp; Sweets</a></li>
						<li><a href="#">Pickles</a></li>
					</ul>
      			</li>
				<li><a href="./Contact.php">Contact</a></li>
				<li><a href="./feedback.php">Feedback</a></li>
				<li><a href="./Myrecipe.php">My Recipie</a></li>
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
			<p><a href="./Vishu.php">Vishu Special</a></p>
			<p><a href="#">Eid Special</a></p>
			<p><a href="#">Easter Special</a></p>
    	</div>
    <div class="col-sm-8 text-left"> 
    	<h1>Welcome</h1>
      	<p>Kerala is known as the "land of Spices". Even the Kerala VSR is known for its spicy and hot foods. Traditionally, in Kerala food is served on a banana leaf. One has to take food with right hand. Almost every dish prepared in Kerala has coconut and spices to flavour the we giving it a sharp pungency that is heightened with the use of tamarind, while coconut gives it its richness, absorbing some of the tongue-teasing, pepper-hot flavours. The unusual cuisine of Kerala brings to the fore the culinary expertise of the people of Kerala. Producing some of the tastiest foods on earth, the people of Kerala are gourmets with a difference.</p>
      	<hr>
      	<h3>Non-Vegetarian Foods</h3>
      	<p>Tasty and Simple Non-Vegetarian Food Recipes...</p>
		
		<div class="row">
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">Beef-fry</div>
        			<div class="panel-body"><img src="image/beefvarattiyath%20-%20Copy.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">Chicken-alfaham</div>
        			<div class="panel-body"><img src="image/al-faham%20-%20Copy.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">mutton-Biriyani</div>
        			<div class="panel-body"><img src="image/Biriyani-Mutton.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			
			<center><button  id="hiddenbtn" style="margin:10px;" onclick="myFunction();" class="btn btn-success">View More</Button></center>
			<hr/>
		</div>
		<div id="hiddenitems" style="display:none;">
		<div class="row"  >
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">Beef-fry</div>
        			<div class="panel-body"><img src="image/beefvarattiyath%20-%20Copy.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">Chicken-alfaham</div>
        			<div class="panel-body"><img src="image/al-faham%20-%20Copy.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">mutton-Biriyani</div>
        			<div class="panel-body"><img src="image/Biriyani-Mutton.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">Erissery</div>
        			<div class="panel-body"><img src="image/Erissery-Kerala-Sadya-768x513.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">Koorka-thoran</div>
        			<div class="panel-body"><img src="image/koorka-thoran%20-%20Copy.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
			<div class="col-sm-4"> 
      			<div class="panel panel-danger">
        			<div class="panel-heading">Fish-fry</div>
        			<div class="panel-body"><img src="image/maxresdefault.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
    		</div>
		</div>
		</div>
	</div>
	
	
    <div class="col-sm-2 sidenav info-div">
	<h3 align="center">Our special</h3>
      <div class="well">
      			<div class="panel panel-danger">
        			<div class="panel-heading">pepper-chicken</div>
        			<div class="panel-body"><img src="image/pepper-chicken.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
		  		</div>
	</div>
      			<div class="panel panel-danger">
        			<div class="panel-heading">chicken-liverfry</div>
        			<div class="panel-body"><img src="image/Chicken-Liver-Curry-768x513.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><center><button class="btn btn-info">Instant Make</button></center></div>
      			</div>
      </div>
      <div class="well">
        <marquee  direction="left"><p>ADS</p></marquee>
      </div>		
    </div>
	  
  </div>
	
</div>
<div class="container">
	<h2 align="center">Recipie of the Day</h2>
	<div class="row">
		<div class="col-sm-4"> 
      		<div class="panel panel-danger">
        		<div class="panel-heading">chicken-chilly</div>
        		<div class="panel-body"><video src="videos/Chicken%20Poppers%204%20Ways.mp4" controls="controls" style="width:100%" alt="Vedio"></div>
      		</div>
    	</div>
		<div class="col-sm-4"> 
      		<div class="panel panel-danger">
        		<div class="panel-heading">fish-fry</div>
        		<div class="panel-body"><video src="videos/fish%20fry.mp4" controls="controls" style="width:100%" alt="Vedio"></div>
      		</div>
    	</div>
		<div class="col-sm-4"> 
      		<div class="panel panel-danger">
        		<div class="panel-heading">Beef-roast</div>
        		<div class="panel-body"><video src="videos/beefroast.mp4" controls="controls" style="width:100%" alt="Video"></div>
      		</div>
    	</div>
			<center><Button onclick="myFunction2()" id="hiddenbtn2" style="margin:10px;" class="btn btn-success">View More</Button></center>
			<hr/>
		</div>
		
		<div id="hid" style="display:none;">
				<div class="col-sm-4"> 
				<div class="panel panel-danger">
					<div class="panel-heading">chicken-chilly</div>
					<div class="panel-body"><video src="videos/Chicken%20Poppers%204%20Ways.mp4" controls="controls" style="width:100%" alt="Vedio"></div>
				</div>
				</div>
				<div class="col-sm-4"> 
					<div class="panel panel-danger">
						<div class="panel-heading">fish-fry</div>
						<div class="panel-body"><video src="videos/fish%20fry.mp4" controls="controls" style="width:100%" alt="Vedio"></div>
					</div>
				</div>
				<div class="col-sm-4"> 
					<div class="panel panel-danger">
						<div class="panel-heading">Beef-roast</div>
						<div class="panel-body"><video src="videos/beefroast.mp4" controls="controls" style="width:100%" alt="Video"></div>
				</div>
		
		</div>
		
		
		</div>
		<!-- Review Section-->
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
<footer class="footer">
    <div class="container">
        <div class="row">
			<div class="col-sm-3">
				<h4 class="title">About us</h4>
				<p>About our company.</p>
				<form action="./Contact.php">
				<button  type="submit" class="btn btn-info">Contact</button><button class="invisible"></button>
				</form>
				<form action="./feedback.php">
				<button  type="submit" class="btn btn-info">Feedback</button><br/>
				</form>
			</div>
			<div class="col-sm-3">
				<h4 class="title">Category</h4>
				<div class="category">
					<a href="./VegItems.php">Veg items</a>
					<a href="./NonVegItems.php">Nonveg items</a>
					<a href="#">Snaks & Sweets</a>
					<a href="#">Maid & Pickle</a>
					<a href="#">Our special</a>
				</div>
			</div>
		</div>
		<hr/>
		<div class="row text-center">
			<p>Copyright © our name 2018</p>
		</div>
    </div>	
</footer>
</body>
</html>

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
echo "connected";
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

