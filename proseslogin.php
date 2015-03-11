<?php 

include("conn.php");

session_start(); 

$user = $_POST['Username']; 
$pass = $_POST['Password'];

$sql="SELECT * FROM login WHERE Username='" . $user . "' and Password='". $pass ."'";
$result = mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if ($num == 1) {
    //kalau username dan password sudah terdaftar di database
    header('location:adminhome.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=4');
}

	if($num < 1) 
		{
			echo "Username Belum Terdaftar!<br/>";
			// echo "<a href='login.php'>&amp;amp;laquo; Back</a>";
		} 
		else {
			echo "username password benar";
			//if($pass <> $hasil['password']) { echo "Password Salah!<br/>";
			//echo "<a href='login.php'>&amp;amp;laquo; Back</a>";
		} 
			//else { $_SESSION['username'] = $hasil['username']; header('location:index.php'); } } ?>
