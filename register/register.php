<?php

include '../config.php';

if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $usersr = "SELECT * FROM users where username='$username'";
    $userrResult = $connection->query($usersr);

    if (mysqli_num_rows($userrResult) > 0) {
        setcookie('exist', 'username already exists', time() + 3, '/');
        header("Location:./");
    }
    else {
        $ssql = "INSERT INTO users (name,username,email,password) VALUES ('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[password]')";
        if (mysqli_query($connection, $ssql)) {
            $last_id = mysqli_insert_id($connection);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            setcookie('register', 'You are registered successfully');
            $_SESSION['login'] = 1;
//            header("Location:../login");
            die;
        }

    }
}
