<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welkom bij de MVC Demo</title>
</head>
<body>
<p>Dit is de index pagina van de MVC demo</p>

<form action="/mvc.local/getuser" method="post">
    <input type="text" name="user" placeholder="username">
    <input type="submit" name="submit" value="get a user">
</form>

</body>
</html>
