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
    <br><br>
    <h2>Личный кабинет</h2><br>
<?php
session_start();
require_once("../db/db.php");

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM `user` WHERE login = '".$login."'";
$select_user = mysqli_query($link, $sql);
// превращаем ответ БД в ассоциативный массив 
$select_user = mysqli_fetch_assoc($select_user);

// выводим ответ БД
$field_labels  = [ 
    "login" => "<i>Логин</i>", 
    "fio" => "<i>ФИО</i>", 
    "country" => "<i>Город</i>", 
    "born" => "<i>Дата рождения</i>", 
    "gender" => "<i>Гендер</i>"
];
$gender = [1 => "Мужчина", 2 => "Женщина"];
// var_dump($select_user);
foreach ($select_user as $key => $value) {
    if (array_key_exists($key, $field_labels )) {
        $display_value = $key == "gender" ? ($value == 1 ? "Мужчина" : "Женщина") : $value;
        echo $field_labels[$key] . ": " . $display_value . "<br/>";
    }
}
if(!empty($select_user)) {
    if(password_verify($password, $select_user['password'])) {
        header("Location: ../show_user.php");
    }
} else {
    $_SESSION['ErrMes'] = '<script>alert("Такого пользователя не существует!")</script>';
    header("Location: ../index.php");
}
?>
