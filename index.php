<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
<body style="background-color: #FFF5EE;">
    <div style="text-align: center;">
    <img src="img\FortunateWasteful.gif" style="width:1200px;height:150px;">
    <h2>Авторизация</h2>
    <form action="./vendor/log.php" method="post">
        <p>Логин: <input type="text" name="login" placeholder="Логин" required> </p>
        <p>Пароль:  <input type="password" name="password" placeholder="Пароль" required></p>
        <input type="submit" value="Войти">
    </form>
    <br><h>Еще не зарегистрировались?  <a href="./registr.php">Зарегистрироваться</a></h>
    <?php
	if (($_SESSION['ErrMes'] ?? '') === ''); else {
	    print_r($_SESSION['ErrMes']);
		session_destroy();
	}
    ?>
</body>
</html>