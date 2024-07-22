<?php
include '../master/header.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/output.css">
    <title>shop</title>
</head>
<body id="back">
<div class="container mx-auto text-2xl" id="login">
    <form action="" method="POST">
        <div class="register flex flex-col items-center">
        <label for="name"> Name:</label>
        <input class="my-2 py-2" type="text" name="name" placeholder=" Enter your name"><br>

        <label for="email"> E-mail:</label>
        <input type="text" name="email" placeholder=" Enter your email" class="py-2 "><br>

        <label for="username">User Name:</label>
        <input type="text" name="username" placeholder=" Enter your username" class="py-2 my-2"><br>

        <label for="pass">password:</label>
        <input type="number" name="pass" placeholder=" Enter your password" class="py-2"><br>

        <a class="btn my-2" href="../login">back to login</a>
        </div>

    </form>
</div>


</body>
</html>