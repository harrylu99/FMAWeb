<meta charset="utf-8">
<?php

	//先启动session
	session_start();
	
	//获取表单提交数据
	$schemenumber=$_POST['schemenumber'];
	$startofyearnumber=$_POST['startofyearnumber'];
    $startofyearassets=$_POST['startofyearassets'];
    $endofyearnumber=$_POST['endofyearnumber'];
    $endofyearassets=$_POST['endofyearassets'];

	//判断提交信息是否为空
	if(empty($_POST['schemenumber']) || empty($_POST['startofyearnumber']) || empty($_POST['startofyearassets']) || empty($_POST['endofyearnumber']) || empty($_POST['endofyearassets'])){
		//弹出消息提示框
		echo "<script>alert('Should not be empty')</script>";
		die();
	}

?>

<?php
	//引用connection.php文件连接数据库
	include_once('db_conn.php');


			 //Define $username and $password
			 $schemenumber=$_POST['schemenumber'];
			 $startofyearnumber=$_POST['startofyearnumber'];
$startofyearassets=$_POST['startofyearassets'];
$endofyearnumber=$_POST['endofyearnumber'];
$endofyearassets=$_POST['endofyearassets'];

			 //
			$connection = new mysqli($sql_host, $sql_user, $sql_pass, $sql_db);

			 if($connection->connect_error) {                
				 die( "connection failed" . $connection->connect_error);
                 
             }

			 $schemenumber = stripslashes($schemenumber);
			 $password = stripslashes($password);
	 
			 $query = "UPDATE activefour SET startofyearnumber = '$startofyearnumber', startofyearassets = '$startofyearassets', endofyearnumber = '$endofyearnumber', endofyearassets = '$endofyearassets'";
		 
			 $result = $connection ->query($query);
		 


	//判断结果集中的行数是否大于0
	if($schemenumber=='100'){
		//弹出消息提示框
        echo 1; 
		echo "<script>alert('Log in sucess!')</script>";
		//跳转到主页面
		include_once('index.html');
	}else if($schemenumber=='100001'){
		//弹出消息提示框
		echo "<script>alert('Log in sucess!')</script>";
		//跳转会登陆页面
		include_once('activeone.html');
	}
else if($schemenumber=='100002'){
    //弹出消息提示框
		echo "<script>alert('Log in sucess!')</script>";
		//跳转会登陆页面
		include_once('defaultone.html');
}

	//关闭数据库连接
	$conn=null;
	//删除session
	session_destroy();
?>