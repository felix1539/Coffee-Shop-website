<?php
session_start();
include("../connection.php");
include("../functions.php");

if ($con->connect_error) {
    die("Connection failed: "
        . $con->connect_error);
}
     $order_id = random_num(20);
     $french = $_POST['french'];
     $columbian = $_POST['columbian'];
     $cappuccino = $_POST['cappuccino'];
     $latte = $_POST['latte'];
     $americano = $_POST['americano'];
     $Caramel_Macchiato = $_POST['Caramel_Macchiato'];
     $mocha = $_POST['mocha'];

     if(empty($french)){
      $french = 0;
     }
     if(empty($columbian)){
      $columbian = 0;
     }
     if(empty($cappuccino)){
      $cappuccino = 0;
     }
     if(empty($latte)){
      $latte = 0;
     }
     if(empty($americano)){
      $americano = 0;
     }
     if(empty($Caramel_Macchiato)){
      $Caramel_Macchiato = 0;
     }
     if(empty($mocha)){
      $mocha = 0;
     }
     


     $sql = "INSERT INTO orders(order_id,french,columbian,cappuccino,latte,americano,Caramel_Macchiato,mocha) VALUES ('$order_id','$french','$columbian','$cappuccino','$latte','$americano','$Caramel_Macchiato','$mocha')";
     if (mysqli_query($con, $sql)) {
        echo "Your order has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);

?>