<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "learning";
$connection = mysqli_connect($host,$user,$password,$database);
$firstname="";$lastname=""; $Email=""; $Address=""; $phone="";
$query = "Select * from users ";
$result = mysqli_query($connection,$query);
//$data = mysqli_fetch_assoc($result) ;





?>
<table border = "2">
    <tr>
        <td>First Name</td>
        <td>ID</td>

    <td>Last Name</td>
    <td>Email</td>
    <td>Address</td>
    <td>Phone</td>
        <td>Password</td>
        <td colspan="2">Action</td>
        <td></td>

</tr>
    <?php
    $i = 1;
    while($data = mysqli_fetch_assoc($result)) {
        $firstname = $data['first_name'];
        $lastname = $data['last_name'];
        $Email = $data['Email'];
        $Address = $data['Address'];
        $phone = $data['phone'];
        $password = $data['password'];

        ?>
<tr>
    <td><?php echo $i++;?></td>
    <td><?php echo $firstname;?></td>
    <td><?php echo $lastname;?></td>
    <td><?php echo $Email;?></td>
    <td><?php echo $Address;?></td>
    <td><?php echo $phone;?></td>
    <td><?php echo $password;?></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td
</tr>

    <?php }?>

</table>
</body>
</html>
