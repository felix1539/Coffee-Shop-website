<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>The Hideout</title>

    <link rel="stylesheet" type="text/css" href="style.css" title="style" />
    <style type="text/css">
        body {
            background-image: url('images/cupsteam.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-color: black;
        }
        
        #menu {
            background-image: none;
        }
    </style>


</head>


<body>
    <?php 
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    ?>
    <div id="menubar">
        <ul id="menu">
            <li>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            </li>

            <li class="selected"><a href="home.php">Home</a></li>

            <li><a href="login/about.html">About us</a></li>

            <li><a href="login/location.html">Locations</a></li>

            <li><a href="login/menu.html">Menu</a></li>

            <li><a href="login/order.html">Order</a></li>

            <li><a href="login/contact.html">Contact Us</a></li>

        </ul>
    </div>
    <div id="name">
        <img src="images/logo.jpg">


    </div>

</body>

</html>