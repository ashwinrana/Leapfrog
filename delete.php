<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "learning";
$connection = mysqli_connect($host,$user,$password,$database);
$id = $_GET['id'];
$query = "delete from users where id =$id";
$data = mysqli_query($connection,$query);
if($data = true){
    header("location:list.php");
}else{
    echo"not deeted";

}

