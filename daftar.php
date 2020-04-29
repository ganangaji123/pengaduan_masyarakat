<?php
if(isset($_POST['nik']) && $_POST['nik']) {

    include 'db_connect.php';

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $sql = "INSERT INTO masyarakat(nik, nama, username, password, telp) VALUES ('$nik','$nama','$username','$password','$telp')";
    $insert = mysqli_query($koneksi, $sql);

    if(! $insert) {
        echo "<script>alert('Gagal! Data Gagal Disimpan.'); window.location.href = './registrasi.php';</script>";
    } else {
        echo "<script>alert('Sukses! Data Berhasil Disimpan.'); window.location = '../pengaduan/login.php'</script>";
    }
}
?>
