<?php
session_start();
include("../connection.php");

if ($con->connect_error) {
    die("Connection failed: "
        . $con->connect_error);
}
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
    
     $sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
     if (mysqli_query($con, $sql)) {
        echo "Your message has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);

?>