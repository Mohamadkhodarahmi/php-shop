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
    <div class="login flex flex-col items-center">
        <form action="" method="POST" >
            <label for="name" > Name:</label>
            <input class="my-2 py-2" type="text" name="name" placeholder=" Enter your name" ><br>

            <label for="email">  E-mail:</label>
            <input type="text" name="email" placeholder=" Enter your email" class="py-2"><br>
            <button  class="btn mt-2 ">login</button>
            <a class="btn mt-2  " href="../register">register</a>
        </form>
    </div>
</div>


</body>
</html>





