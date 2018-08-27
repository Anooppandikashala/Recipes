<html>
	<body>
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
			
		$user=$_POST['Username'];
		$pass=$_POST['Password'];
		
		echo $user;
		echo $pass;
		
		 
		 if($user == "admin" && $pass =="1234")
		 {
			 echo"login success";
			 header("Location: ./onam.php");
		 }
		 else{
			 echo"invalid";
		 }
		 mysql_close();
		?>	
	</body>
</html>			
