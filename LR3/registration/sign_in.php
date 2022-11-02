<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/main.css">
	<title>Регистрация</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
	
</head>
<body>
    <?php
        include '../php/header.php'
    ?>
    <div class="container">
    <div class="col-6">
        <br><br>
        <h2>
            Введите свой логин и пароль
        </h2>
        <br>
        <form action="logic_sign_in.php" method="post" autocomplete="off">
    <div class="mb-3">
    <label for="email" class="form-label">Логин  
    </label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="login" placeholder="Введите email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password "name="password" placeholder="Введите пароль">
  </div>
  <button type="submit" class="btn btn-primary">Войти</button>
  <div>
  <br>
                Еще нет аккаунта?
            </div>
            <a href="sign_up.php" class="text-body">
                Зарегистрироваться
            </a>
            <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>