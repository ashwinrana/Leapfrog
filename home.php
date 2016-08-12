<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<title>Home</title>
</head>
<body>
<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $database = "learning";
// $connection = mysqli_connect($host,$user,$password,$database);
// if(isset($_POST["status"])&& (!empty($_POST["status"]))) {
//     $value=$_POST["status"];
//     $query = "INSERT INTO `posts`(`status`) VALUES('$value')";
//     $data = mysqli_query($connection, $query);
//     if($data==true){
//         echo"done";
//     }else{
//         echo"do it again";
//     }
// }else{
//     echo"enter any data";
// }

include ('photouplod.php');




//$connection = dbcon($connection);
$value = $_POST["status"];
$query = "INSERT INTO `posts`(`status`) VALUES('$value')";
$data = mysqli_query(dbcon($connection),$query);


?>

<div style="float: right"> <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
</div>
<form action="home.php"  method="POST" class="form">
    <textarea type="text" class="form-group" name="status" rows="5" cols="80" ></textarea>
    <input type="file" name="photo">
<button>Post</button>
</form>
<hr>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>