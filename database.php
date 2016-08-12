<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "learning";
$connection = mysqli_connect($host,$user,$password,$database);
if(isset($_POST["firstname"]) && ($_POST["lastname"]) &&($_POST["address"]) && ($_POST["phone"]) && (!empty($_POST["firstname"]))  && (!empty($_POST["lastname"]))  && (!empty($_POST["address"]))  && (!empty($_POST["phone"])) ){
   $name = $_POST["firstname"];
   $surname = $_POST["lastname"];
  $email = $_POST["email"];
  $address = $_POST["address"];
   $phone = $_POST["phone"];
$postdata = $_POST;


$exists = 0;
	$result = mysqli_query($connection, "SELECT Email from users WHERE Email = '{$email}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists = 1;
			
	}
 
	if ($exists == 1) echo "<p>Email already exists!</p>";
	

$query = 'INSERT INTO `users`(`first_name`, `last_name`,`Email`,`password`,`Address`, `phone`)VALUES
("'.$postdata["firstname"].'","'.$postdata["lastname"].'","'.$postdata["email"].'","'.$postdata["password"].'","'.$postdata["address"].'","'.$postdata["phone"].'")';

if(mysqli_query($connection,$query)){
    echo"added sucessfully";
}
}else{
	echo"Enter every data";
}
