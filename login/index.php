<?php
include '../master/header.php';
include '../config.php';


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
<div class="font-sans text-gray-950 antialiased flex flex-col items-center" id="login">
    <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-2xl overflow-hidden sm:rounded-lg ">
        <div class="py-8">
            <center>
                <span class="text-2xl font-semibold">Log In</span>
            </center>
        </div>
        <?php

        if (isset($_COOKIE['wrong'])):

            ?>
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <?= $_COOKIE['wrong'] ?>
            </div>
        <?php


        endif;
        ?>
        <form action="../login/account.php" method="POST" >
            <div class="block font-medium text-md text-gray-700">
                <label for="email" class="block font-medium text-lg text-gray-700">  E-mail:</label>
                <input type="text" name="email" placeholder=" Enter your email" class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]"><br>

                <label for="name" class="block font-medium text-lg text-gray-700"> password:</label>
                <input class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" type="text" name="password" placeholder=" Enter your password" ><br>


                <button type="submit" class="mt-2 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent " id="loginbutton">login</button>
                <a class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="../register">register</a>
            </div>

        </form>
    </div>
</div>


</body>
</html>





