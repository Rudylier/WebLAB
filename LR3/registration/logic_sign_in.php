<?php
    session_start();
    require_once '../php/connect.php';

    $login=mysqli_real_escape_string($linc,$_POST["login"]);
    $password=md5($_POST['password'].$_SESSION['salt']);
    $check_user = mysqli_query($linc, "SELECT * FROM `users` WHERE `email` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['email']
        ];

        header('Location: ../php/filter.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: sign_in.php');
    }
?>
