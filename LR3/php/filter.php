<?php
    session_start();
    if(!isset($_SESSION['user'])){
      $_SESSION['message'] = "Неавторизованным пользователям запрещен вход на страницу";
      header("Location: exhibition.php");
    }
    include 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Третьяковская галерея</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?php
      include 'header.php'
    ?>
<div class="container">
	<br><br><br>	
	<div class="row">
		<br><br><br>
        <h3>Можете узнать о наших картинах подробнее:</h3>
        <h4>Фильтр:</h4><br><br>
		<div class="col-6">
        <form action="filter.php" method="post" autocomplete="off">
             <label>По дате:</label>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="От" name="Date_start" value="<?php if (isset($_POST['Date_start'])) echo $_POST['Date_start'] ?>">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="До" name="Date_end" value="<?php if (isset($_POST['Date_end'])) echo $_POST['Date_end'] ?>">
            </div>
            <label>По названию зала:</label>
            <div class="mb-3">
                <select class="form-control" name="HallName">
                    <option value=""
                        <?php if(isset($_POST['HallName']) && $_POST['HallName'] == "")
                            echo ' selected="selected"';
                        ?>
                    ></option>
                    <option value="Живопись и скульптура 18 века"
                        <?php if(isset($_POST['HallName']) && $_POST['HallName'] == "Живопись и скульптура 18 века")
                            echo ' selected="selected"';
                        ?>
                    >Живопись и скульптура 18 века</option>
                    <option value="Живопись и скульптура 19 века"
                        <?php if(isset($_POST['HallName']) && $_POST['HallName'] == "Живопись и скульптура 19 века")
                            echo ' selected="selected"';
                        ?>
                    >Живопись и скульптура 19 века</option>
                    <option value="Врубель"
                        <?php if(isset($_POST['HallName']) && $_POST['HallName'] == "Врубель")
                            echo ' selected="selected"';
                        ?>
                    >Врубель</option>
                    <option value="Живопись и скульптура ХХ века"
                        <?php if(isset($_POST['HallName']) && $_POST['HallName'] == "Живопись и скульптура ХХ века")
                            echo ' selected="selected"';
                        ?>
                    >Живопись и скульптура ХХ века</option>
                    <option value="Графика 18-20 века"
                        <?php if(isset($_POST['HallName']) && $_POST['HallName'] == "Графика 18-20 века")
                            echo ' selected="selected"';
                        ?>
                    >Графика 18-20 века</option>
                    <option value="Сокровищница"
                        <?php if(isset($_POST['HallName']) && $_POST['HallName'] == "Сокровищница")
                            echo ' selected="selected"';
                        ?>
                    >Сокровищница</option>
                </select>
             </div>
            <label>По описанию картины:</label>
            <div class="mb-3">
                <textarea class="form-control" name="description"><?php if (isset($_POST['description'])) echo $_POST['description'] ?></textarea>
            </div>
            <label>По художнику:</label>
             <div class="mb-3">
                <input type="text" class="form-control" name="Name" value="<?php if (isset($_POST['Name'])) echo $_POST['Name'] ?>">
            </div>
            <div class="mb-3">
             <button type="submit" class="btn btn-primary" name="filter">Отфильтровать</button> <button type="submit" class="btn btn-danger" name="reset">Очистить форму</button>
            </div>
			<br><br><br>	
        </form>
		</div>
        <table border="1" width="100%" cellpadding="15" bordercolor="#D3D3D3">
            <tr>
                <th>Картина</th>
                <th>Художник</th>
                <th>Описание картины</th>
                <th>Зал</th>
                <th>Дата создания</th>
            </tr>
            <?php

            $result = mysqli_query($linc,$sql);
			//$result= mysqli_real_escape_string($linc,$result);
            while ($goods = mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td>
                        <?php echo '<img src="'.'../catalog/'.$goods['img_path'].'" style="width:300px;height:300px">';?>
                    </td>
                    <td>
                        <?php
						echo $goods['name'] ?>
                    </td>
                    <td>
                        <?php echo $goods['description'] ?>
                    </td>
                    <td>
                        <?php echo $goods['HallName']?>
                    </td>
                    <td>
                        <?php echo $goods['Date'] ?>
                    </td>
                </tr>
				
                <?php
            }
            ?>
        </table>
    		</div>
			</div>
		</div>	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>