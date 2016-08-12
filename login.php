
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Miniyan
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body>
<div class="container">
<div class="row">
    <H1>GO Inside</H1>
    <form action="inside.php" class="form" method="post">
        <div class="form-group"><label for="">Email</label><input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email"></div>
        <div class="form-group"><label for="">Password</label><input type="password" class="form-control" name="password" placeholder="Password"></div>
        <div class="form-group"><label for=""></label><button type="text" class="btn btn-info">GO</button></div>

    </form>
</div>
</div>
<div class="container">
    <div class="row">
        <H1>ADD User</H1>
        <form action="database.php" class="form" method="POST">
            <div class="form-group"><label for="">First Name</label><input type="text" class="form-control" name="firstname" placeholder="First Name"></div>
            <div class="form-group"><label for="">Last Name</label><input type="text" class="form-control" name = "lastname" placeholder="Last Name"></div>
            <div class="form-group"><label for="">Email</label><input type="email" class="form-control" name = "email" placeholder="Email"></div>
            <div class="form-group"><label for="">Password</label><input type="password" class="form-control" name = "password" placeholder="Password"></div>
            <div class="form-group"><label for="">Address</label><input type="address" class="form-control" name = "address" placeholder="Address"></div>
            <div class="form-group"><label for="">Phone</label><input type="phone" class="form-control" name="phone" placeholder="Phone"></div>
            <div class="form-group"><label for=""></label><button type="text" class="btn btn-info">Save</button></div>

        </form>
    </div>
</div>
</body>
</html>

