<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ptbd";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("La Conexión Falló: " . mysqli_connect_error());
}