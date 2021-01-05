<?php
$server = "localhost";
$user = "root";
$password ="";
$dbname = "kata_dasar";
$conn = mysqli_connect($server, $user, $password, $dbname);
if (!$conn) {
  die("Gagal Terhubung ke database:" . mysqli_connect_error());
}
