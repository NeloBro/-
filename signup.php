<?php 
session_start();

require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$password = md5($password);

mysqli_query($connect, "INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')");
header("Location: /");


?>