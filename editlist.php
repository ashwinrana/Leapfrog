<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "learning";
$connection = mysqli_connect($host,$user,$password,$database);
$firstname="";$lastname=""; $Email=""; $Address=""; $phone="";
$query = "Select * from users";
$result = mysqli_query($connection,$query);

