<?php
$host = 'mysql-juanda.alwaysdata.net';
$user = 'juanda.alwaysdata.net';
$password = 'misifu123';
$database = 'juanda_envios';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Error de conexión: ' . mysqli_connect_error());
}
?>