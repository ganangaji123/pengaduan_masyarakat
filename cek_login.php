<?php

session_start();

include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM masyarakat where username='$username' and password='$password'");
$r = mysqli_fetch_array($login);
$cek = mysqli_num_rows($login);

if($cek > 0) {

	mysqli_fetch_assoc($login);

	$_SESSION['nik'] = $r['nik'];
	$_SESSION['nama'] = $r['nama'];
	$_SESSION['telp'] = $r['telp'];
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $r['password'];

	header("location:masyarakat/home.php");
} else {
	echo "<script>alert('Username atau Password Salah!'); window.location='login.php'</script>";
}

?>