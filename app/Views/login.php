<?php

include 'conmysql.php';

$name=$_POST['email'];
$password=$_POST['password'];
//$gender=$_POST['gender'];
//$checkbox=$_POST['checkbox'];

$result = mysqli_query($con, "SELECT * FROM Cittadini WHERE Email='$name' AND Password='$password'");


if($result->fetch_assoc()> 0){
   header('Location: opuscolo.php');
   exit;
}
else{
   header('Location: login?product=false');
   exit;
}


?>