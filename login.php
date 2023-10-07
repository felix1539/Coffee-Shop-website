<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "Wrong email or password!";
		}else
		{
			echo "Wrong email or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: yellow;">Login</div>

			<input id="text" type="text" name="email" placeholder="Email"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php" style="color: lightblue;">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>