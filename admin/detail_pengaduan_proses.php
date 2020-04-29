<?php
if(isset($_POST['tanggapan']) && $_POST['tanggapan']) {

    include '../db_connect.php';

    $id = $_POST['id'];
    $tanggapan = $_POST['tanggapan'];
    $status = $_POST['status'];

    $sql = "UPDATE pengaduan SET tanggapan='$tanggapan', status='$status' WHERE id_pengaduan='$id'";
    $insert = mysqli_query($koneksi, $sql);

    if(! $insert) {
        echo "<script>alert('Gagal! Data Gagal Disimpan.'); window.location.href = './data_pengaduan.php';</script>";
    } else {
        echo "<script>alert('Sukses! Data Berhasil Disimpan.'); window.location = '../admin/data_pengaduan.php'</script>";
    }
}
?>
