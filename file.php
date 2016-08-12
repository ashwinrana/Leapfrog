<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";//database name
$connection = mysqli_connect($hostname, $username, $password, $dbname);
if (!$connection) {
    echo "connection failed";
}
for(i=0;a>=2;i++){
    $value= $_POST["user"];

}
echo $value;
/*
$usertext = $_POST['user'];
$sel = "select number from users where country='$usertext'";
$result = mysqli_query($connection, $sel);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo "Matched input successfully";

    }

} else {
    echo " input does not matched";
}
mysqli_close($connection);
*/