<?php
include '../config.php';

session_start();

$hasError = false;

while ($user = $userResult->fetch_assoc()) {
    if($_POST['email'] == $user['email']) {
        if ($_POST['password'] == $user['password']) {
            $_SESSION['login']=1;
            header("Location:../index.php");
            die;
        } else {
            setcookie('wrong', 'wrong pass',time() + 3,'/');
            header("Location:./");
            die;
        }
    }
    else{
        setcookie('wrongemail', 'wrong pass or email',time() + 3,'/');
        header("Location:./");
    }
}