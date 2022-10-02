<?php 
session_start();

$connect = mysqli_connect('localhost','root','','laba');

if(!$connect) {
    die("Connection Error");
}

?>