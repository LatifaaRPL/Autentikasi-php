<?php

$hostname = "localhost";
$username = "root";
$password = '';
$database = "db_user";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if($koneksi->connect_error) {
    var_dump($koneksi->connect_error);
    die('Koneksi Bermasalah');
}

$sql = "SELECT * FROM users";
$result = $koneksi->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($data);

?>