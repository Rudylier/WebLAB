<?php
    require_once '../php/connect.php';

    //$validation = false;
    function generateRandomString() {
        $length=rand(3,10);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    foreach($_POST as $item){
        $item=mysqli_real_escape_string($linc,$item);
    }

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
            $salt=generateRandomString();
            $_SESSION['salt']=$salt;
            $password = md5($password.$salt);
            
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
