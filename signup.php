<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];

		if(!empty($email) && !empty($password) && !is_numeric($email) && !empty($c_password) &&  $c_password === $password)
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,email,password,c_password) values ('$user_id','$email','$password','$c_password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

body{
		background-image: url('images/img.jpeg');
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#button {
  		background-color: #04AA6D;
  		color: white;
  		padding: 14px 20px;
  		margin: 8px 0;
  		border: none;
  		cursor: pointer;
  		width: 100%;
	}

	#button:hover {
  		opacity: 0.8;
	}

	#box{
		position: center;
		background-color: black;
		margin:100px 300px;
		width: 400px;
		padding: 2px 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: Yellow; bg">Signup</div>

			<input id="text" type="text" name="email" placeholder="Email"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="text" type="password" name="c_password" placeholder="Confirm Password"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php" style="color: lightblue;">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>