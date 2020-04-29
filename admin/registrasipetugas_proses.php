<?php
if(isset($_POST['nama_petugas']) && $_POST['nama_petugas']) {

    include '../db_connect.php';

    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];

    $sql = "INSERT INTO petugas(nama_petugas, username, password, telp, level) VALUES ('$nama_petugas','$username','$password','$telp','$level')";
    $insert = mysqli_query($koneksi, $sql);

    if(! $insert) {
        echo "<script>alert('Gagal! Data Gagal Disimpan.'); window.location.href = './registrasipetugas.php';</script>";
    } else {
        echo "<script>alert('Sukses! Data Berhasil Disimpan.'); window.location = '../admin/data_petugas.php'</script>";
    }
}
?>
