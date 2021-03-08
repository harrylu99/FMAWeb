<?php
    session_start();
    //$connection = mysql_connect("localhost","13412","ap6DYtes");
	//mysql_connect "Youe sql server IP address", "server username", "server password",
	 $server_name = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "password";
	 $dbname = "kiwisaver";
	
	$connection = new mysqli($server_name, $dbUsername, $dbPassword, $dbname);
	
	if($connection->connect_error) {
				 die("connection failed" . $connection->connect_error);
			 }
			 
	//$db = mysql_select_db("13412",$connection);
	//mysql_select_db ("The name of your database", connection obj);
	
	$username_check = $_SESSION['login_user'];
	//find out the username from session
	
	$sql = "SELECT schemenumber from user where dbUsername= '$username_check'";
	$result = $connection ->query($sql);

	if($result ->num_rows < 1) {
				 header("location: htttp://www.baidu.com");
			 }
			 
			 $connection->close();
?>

