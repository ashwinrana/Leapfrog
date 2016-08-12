<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "learning";
$connection = mysqli_connect($host,$user,$password,$database);
$email = $_POST["email"];
$form_password = $_POST["password"];

// $query = 'SELECT `first_name`, `password` From users where first_name = "'.$name.'", password = "'.$form_password.'"';

// mysqli_query($connection,$query);


$sql = "SELECT * from users WHERE Email LIKE '{$email}' AND password LIKE '{$form_password}' LIMIT 1";
	$result = mysqli_query($connection,$sql);
	if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
	} else {
		// header('location:home.php');
		function inside(){
		$query="SELECT * from users where Email = '$email'";
		$result = mysqli_query($connection,$query);
		 while($data = mysqli_fetch_assoc($result)){
             $user_name = $data['first_name'];
		$user_last_name = $data['last_name'];
			return $user_name;
         }
     }
header('location:home.php');
//
		}
		?>
<html>

</html>
<body>


</body>
