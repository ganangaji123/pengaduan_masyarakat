<?php
if(isset($_POST['nik']) && $_POST['nik']) {

    include '../db_connect.php';

    $nik = $_POST['nik'];
    $tkp = $_POST['tkp'];
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $isi_laporan = $_POST['isi_laporan'];
    $status = $_POST['status'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file   = $_FILES['foto']['name'];
    // Tentukan folder untuk menyimpan file
    $folder = "../files/$nama_file";
    if (move_uploaded_file($lokasi_file,"$folder")){
    }

$sql = "INSERT INTO pengaduan(nik, tkp, tgl_pengaduan, isi_laporan, status, foto) VALUES ('$nik','$tkp','$tgl_pengaduan','$isi_laporan','$status','$nama_file')";
    $insert = mysqli_query($koneksi, $sql);

    if(! $insert) {
        echo "<script>alert('Gagal! Data Gagal Disimpan.'); window.location.href = './tulis.php';</script>";
    } else {
        echo "<script>alert('Sukses! Data Berhasil Disimpan.'); window.location = '../masyarakat/tampil_data.php'</script>";
    }
}
?>
