<?php
// get a user
$user=new user();

if(isset($_POST['submit'])) {
    $uc = new userlogin_controller();
    $user = htmlspecialchars($_POST['user']);
    $password = $_POST['password'];
    $user = $uc->getuser($user);
    $canlogin = ($user->checkpassword($password)) ? "yes" : "no";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC Demo - User view</title>
</head>
<body>
    <p>Selected user:</p>
    <div>
        <div><?=$user->id?></div>
        <div><?=$user->name?></div>
        <div><?=$user->password?></div>
        <div>Password correct: <?=$canlogin?></div>
    </div>
</body>
</html>
