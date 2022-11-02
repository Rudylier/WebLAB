<?php
    session_start();
    require_once '../php/connect.php';
    if(isset($_POST['login'])){
        include 'logic_sign_up.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/main.css">
	<title>Авторизация</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
	
</head>
<body>
    <?php
        include '../php/header.php'
    ?>
    <div class="container">
    <br>
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col"></div>
    <div class="col">
    <h2 class="registr">
            Регистрация
        </h2>
    </div>
    <div class="col"></div>
  </div>
     <br><br> 
    </div>
    <div class="col-4">
    </div>
        <div class="row">
        <form action="sign_up.php" class="offset-4 col-4" method="post" autocomplete="off">
    <div class="mb-3">
        <label for="email" class="form-label">Почта 
        </label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="login" placeholder="Введите email"required value="<?php if (isset($_POST['login'])) echo $_POST['login'] ?>">
    </div>
            
    <div class="mb-3">
        <label for="full_name" class="form-label">ФИО
        </label>
        <input type="text" class="form-control" id="full_name" aria-describedby="full_name" name="full_name" placeholder="Введите ФИО" required value="<?php if (isset($_POST['full_name'])) echo $_POST['full_name'] ?>">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Дата рождения
        </label>
        <input type="date" class="form-control" id="date" aria-describedby="DateHelp" name="date" placeholder="Дата рождения" required value="<?php if (isset($_POST['date'])) echo $_POST['date'] ?>">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Адрес
        </label>
        <input type="text" class="form-control" id="address" aria-describedby="AddressHelp" name="address" placeholder="Введите свой адрес" required value="<?php if (isset($_POST['address'])) echo $_POST['address'] ?>">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Выберите пол
        </label>
        <select class="form-control" id="gender" name="gender" required aria-label="Default select example">
                <option value="" <?php if(isset($_POST['gender']) && $_POST['gender'] == "")
                  echo ' selected="selected"';
                ?>></option>
                <option value="Мужчина" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Мужчина")
                  echo ' selected="selected"';
              ?>>Мужчина</option>
                <option value="Женщина" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Женщина")
                  echo ' selected="selected"';
              ?>>Женщина</option>
            </select>
    </div>        
                <div class="mb-3">
                <label for="interests" class="form-label">Какие у вас интересы</label>
                <textarea class="form-control" id="interests" rows="3" name="interests"><?php if (isset($_POST['interests'])) echo $_POST['interests'] ?></textarea>
                </div>
            <div class="mb-3">
                <label for="vk_link" class="form-label">Ссылка на ваш Вк
                </label>
                <input type="text" class="form-control" id="vk_link" aria-describedby="vk_link_Help" name="vk_link" placeholder="Укажите ссылку на ваш ВК" value="<?php if (isset($_POST['vk_link'])) echo $_POST['vk_link'] ?>">
            </div>
    <div class="mb-3">
        <label for="factor" class="form-label">Выберите свой резус фактор
        </label>
        <select class="form-control" id="factor" name="factor" aria-label="Default select example">
                <option value="" <?php if(isset($_POST['factor']) && $_POST['factor'] == "")
                  echo ' selected="selected"';
                ?>></option>
                <option value="Положительный" <?php if(isset($_POST['factor']) && $_POST['factor'] == "Положительный")
                  echo ' selected="selected"';
              ?>>Положительный</option>
                <option value="Отрицательный" <?php if(isset($_POST['factor']) && $_POST['factor'] == "Отрицательный")
                  echo ' selected="selected"';
              ?>>Отрицательный</option>
            </select>
    </div>   
    <div class="mb-3">
        <label for="blood_type" class="form-label">Выберите свою группу крови
        </label>
        <select class="form-control" id="blood_type" name="blood_type" aria-label="Default select example">
                <option value="" <?php if(isset($_POST['blood_type']) && $_POST['blood_type'] == "")
                  echo ' selected="selected"';
                ?>></option>
                <option value="A(0)" <?php if(isset($_POST['blood_type']) && $_POST['blood_type'] == "A(0)")
                  echo ' selected="selected"';
              ?>>A(0)</option>
                <option value="B(|)" <?php if(isset($_POST['blood_type']) && $_POST['blood_type'] == "B(|)")
                  echo ' selected="selected"';
              ?>>B(|)</option>
              <option value="C(|||)" <?php if(isset($_POST['blood_type']) && $_POST['blood_type'] == "C(|||)")
                  echo ' selected="selected"';
              ?>>C(|||)</option>
              <option value="AB(|V)" <?php if(isset($_POST['blood_type']) && $_POST['blood_type'] == "AB(|V)")
                  echo ' selected="selected"';
              ?>>AB(|V)</option>
            </select>
    </div>   
    
    <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Подтверждение пароля</label>
        <input type="password" class="form-control" id="password" name="password_confirm" placeholder="Подтвердите пароль">
    </div>
            <button type="submit" class="btn btn-primary mb-6">Зарегестрироваться</button>
            <?php
                if(isset($_SESSION['message'])){
                    echo '<div class="msg"> ' . $_SESSION['message'] . ' </div>';
                }
                unset($_SESSION['message']);
            ?>
                
            <a href="sign_in.php" class="text-body">
            Уже есть аккаунт? Войдите <br><br><br>
            </a>
        </form>
        <br><br><br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>