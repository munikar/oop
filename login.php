<?php  
	session_start();
	include 'User.php';
	$obj = new User();

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<h2>login</h2>
<?php  
	if(isset($_POST['username'],$_POST['password'])){
		if($obj->login($_POST)){
			$data = $obj->login($_POST);
			// var_dump($data);
			// exit;
			$_SESSION['id']  = $data->id;
			header('location:dashboard.php');
		}
		else{
			echo "invalid username and password";

		}
	}
?>
	<form action="" method="post">
		<p>
			Username : <input type="text" name="username"> 
		</p>
		<p>
			Password : <input type="password" name="password">
		</p>
		<input type="submit" value="login">
	</form>

</body>
</html>