<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  if(!isset($_SESSION['username'])) {
    echo "<script>alert('Anda Belum Login!'); window.location='../login.php';</script>";
  }
?>

<!-- create-post.html  21 Nov 2019 04:05:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pengaduan Masyarakat!</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/app.min.css">
  <link rel="stylesheet" href="../assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="../assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <?php 
  include 'layout.php';
  ?>
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Laporan</h4>
                  </div>
  <?php
    include '../db_connect.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * from pengaduan WHERE id_pengaduan='$id'");
    while($row = mysqli_fetch_array($data)){
  ?>
                  <div class="card-body">
                    <form action="detail_pengaduan_proses.php" method="post">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="hidden" name="id" value="<?php echo $row['id_pengaduan']; ?>">
                        <input type="text" class="form-control" value="<?php echo $row['nik'];?>" readonly="">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" value="<?php echo $row['tgl_pengaduan'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TKP</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" value="<?php echo $row['tkp'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Laporan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" value="<?php echo $row['isi_laporan'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggapan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="tanggapan" rows="5"><?php echo $row['tanggapan'] ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Otentik</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <a href="../files/<?php echo $row['foto'];?>" target="_blank"><img src="../files/<?php echo $row['foto'];?>" style="width: 250px;height: 250px;"></a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" value="<?php echo $row['status'];?>" readonly>
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="button" class="btn btn-danger" onclick="self.history.back()">Kembali</button>
                      </div>
                    </div>
                    </form>
                  <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="../templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="../assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../assets/bundles/summernote/summernote-bs4.js"></script>
  <script src="../assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="../assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <script src="../assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/create-post.js"></script>
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
</body>


<!-- create-post.html  21 Nov 2019 04:05:03 GMT -->
</html>