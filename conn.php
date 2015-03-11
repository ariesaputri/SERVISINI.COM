<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "servisini";

//membuat koneksi
$conn = mysqli_connect( $servername, $username, $password, $database);

//cek koneksi
//if ($conn->connect_error) {
//	die("GAGAL KONEK: ". $conn->connect_error);
//q}
echo "ALHAMDULILLAH BERHASIL KONEK";
?>
