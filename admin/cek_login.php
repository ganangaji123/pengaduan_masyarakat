<?php

session_start();

include '../db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM petugas where username='$username' and password='$password' and level='admin'");
$r = mysqli_fetch_array($login);
$cek = mysqli_num_rows($login);

if($cek > 0) {

	mysqli_fetch_assoc($login);

	$_SESSION['id_petugas'] = $r['id_petugas'];
	$_SESSION['nama_petugas'] = $r['nama_petugas'];
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $r['password'];
	$_SESSION['telp'] = $r['telp'];
	$_SESSION['level'] = $r['level'];

	header("location:../admin/home.php");
} else {
	echo "<script>alert('Username atau Password Salah!'); window.location='../admin/'</script>";
}

?>