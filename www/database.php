<?php

$dbhost = 'mariadb';
$dbname = 'pokemon_db';
$dbuser = 'root';
$dbpass = 'password';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8mb4');