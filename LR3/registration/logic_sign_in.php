<?php
    session_start();
    require_once '../php/connect.php';

    $login=$_POST["login"];
    $password=md5($_POST['password']);
    $check_user = mysqli_query($linc, "SELECT * FROM `users` WHERE `email` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['email'],
            "full_name" => $user['user_name'],
            "date" => $user['birthday'],
            "address" => $user['address'],
            "gender" => $user['user_gender'],
            "interests" => $user['user_interests'],
            "vk_link" => $user['vk_link'],
            "factor" => $user['rh_factor'],
            "blood_type" => $user['blood_type']
        ];

        header('Location: ../php/filter.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: sign_in.php');
    }
?>