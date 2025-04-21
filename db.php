<?php
// Nama : Ibnu Hanafi Assalam
// NIM  : A12.2023.06994
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$host = "localhost";
$user = "root";
$pass = "";
$db = "campus";
$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die(json_encode([
        "status" => false,
        "message" => "Koneksi gagal: " . $koneksi->connect_error
    ]));
}
?>
