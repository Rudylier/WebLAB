<?php
    require_once '../php/connect.php';

    //$validation = false;

    $email=$_POST['login'];
    $user_name=$_POST['full_name'];
    $birthday=$_POST['date'];
    $address=$_POST['address'];
    $user_gender=$_POST['gender'];
    $user_interests=$_POST['interests'];
    $vk_link=$_POST['vk_link'];
    $rh_factor=$_POST['factor'];
    $blood_type=$_POST['blood_type'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];


    $check_user = mysqli_query($linc, "SELECT * FROM `users` WHERE `email` = '$email'");

    if(mysqli_num_rows($check_user) == 0){
        if(preg_match_all("/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/",$password)==null){
            $_SESSION['message'] = 'Пароль должен содержать от 6 символов с использованием цифр, спец. символов, латиницы, наличием строчных и прописных символов.';
        }
        else if($password == $password_confirm){
            $password = md5($salt . $password);
            mysqli_query($linc, "INSERT INTO `users` (`id`, `email`, `user_name`, `birthday`, `address`, `user_gender`, `user_interests`, `vk_link`, `blood_type`, `rh_factor`, `password`) VALUES (NULL, '$email', '$user_name', '$birthday', '$address', '$user_gender', '$user_interests', '$vk_link', '$blood_type', '$rh_factor', '$password')");            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: sign_in.php');
        }
        else {
        $_SESSION['message'] = 'Пароли не совпадают';
        }
    }
    else{
        $_SESSION['message'] = 'Пользователь с таким логином уже существует';
    }

?>
