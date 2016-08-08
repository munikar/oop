<?php
	session_star();
	include 'User.php';
	$obj = new User();
	// if($obj->register)
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
</head>
<body>
	<h2>Registration</h2>
	<?php
		if(isset($_POST['username'],$_POST['password'])){
			if($obj->register($_POST)){
				echo "Record saved";
			}
			else{
				echo "Sorry";
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
		<input type="submit" value="Save">
	</form>
</body>
</html>