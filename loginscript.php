<?php
     //session_start();
	 
	 /*if(isset($_POST['submit2'])){
		 header("location:Registration.php");
	 }*/
		 
	 if(isset($_POST['submit'])){
		 
		 if(empty($_POST['schemenumber']) || empty($_POST['password'])){
		 $error="Username or Password is invalid";
		 
		 }else{
			 $server_name = "localhost";
			 $dbUsername = "root";
			 $dbPassword = "password";
			 $dbname = "kiwisaver";
			 
			 //Define $username and $password
			 $schemenumber=$_POST['schemenumber'];
			 $password=$_POST['password'];
			 //
			 //
			 $connection = new mysqli($server_name, $dbUsername, $dbPassword, $dbname);
			 
			 if($connection->connect_error) {
				 die("connection failed" . $connection->connect_error);
			 }
			 
			 $schemenumber = stripslashes($schemenumber);
			 $password = stripslashes($password);
			 
			 $query = "SELECT * FROM user WHERE password= '$password' AND schemenumber='$schemenumber'";
			 
			 $result = $connection ->query($query);
			 
			 
			 
			 if($result ->num_rows > 0) {
				 if ($schemenumber ==admin){
					 header("location: index.html");
				 }else{
				 
				 //$_SESSION['login_user']=$schemenumber;
				 header("location: activeone.html");}
			 }
			 else{
				 echo"Please insert correct username/password";
			 }
			 $connection->close();
			 }
			 
			 /*
			 $rows = mysql_num_rows($query);
			 
			 if($rows == 1){
				 $_SESSION['login_user']=$username;
				 header("location: shopping1.php");
			 }else{
				 $error="Username or Password is invalid.";
			 }
			 mysql_close($connection);*/
			 
		 }
	 
 
    
?>
