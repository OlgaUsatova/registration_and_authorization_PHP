<?php
require_once("./db/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <body style='background-color:#FFF5EE'>
        <div style="text-align: center;">
            <img src="img\5212_cb023.gif" style="width:1200px;height:100px;">
            <h2>Регистрация</h2>
            <form action="./vendor/reg.php" method="post">
                <p>Логин: <input type="text" name="login"></p>
                <p>Пароль: <input type="password" name="password"></p>
                <p>Фио: <input type="text" name="fio"></p>
                <p>Город: <input type="text" name="country"></p>
                <p>Дата рождения: <label for="born"></label>
                <input type="date" name="born">
                <br>
                <br>
                <p>Пол:</p><label for="gender"></label>
                <input type="radio" name="gender" value="Мужчина" />Мужчина
                <input type="radio" name="gender" value="Женщина" />Женщина
                </label></p>
                <br>
                <br>
                <input type="submit" value="Зарегистрироваться">
            </form>
    </body>
</html>