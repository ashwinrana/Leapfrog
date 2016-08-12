<?php
include ('photouplod.php');
require ('inside.php');
$connection = "";
$query= "Select * from users";
$result= mysqli_query(dbcon($connection),$query);
// if($result==True){
// 	echo 'Done';
// }else{
// 	echo'look at the code again';
// }
while($data = mysqli_fetch_assoc($result)){
echo $data["first_name"];
}
echo inside($user_name);
echo inside($user_last_name);

?>