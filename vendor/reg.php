<?php

require_once("../db/db.php");

var_dump($_POST);

$login = $_POST['login'];
$password = $_POST['password'];
$fio = $_POST['fio'];
$born = $_POST['born'];
$country = $_POST['country'];
$gender = $_POST['gender'] == "Мужчина" ? true : false;

$create_user = mysqli_query($link, "INSERT INTO `user`(`login`, `password`, `fio`, `born`, `country`, `gender`) VALUES ('$login','$password','$fio','$born','$country', '$gender')");

if($create_user) {
header("Location: ../index.php");
}
?>