<?php 
	session_start(); 
	include 'User.php';
	$obj = new User();
	if($obj->isLoggedIn()==false){
		header('location:login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
welcome
</body>
</html>