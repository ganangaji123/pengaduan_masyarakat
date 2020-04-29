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
                    <h4>Data Laporkan</h4>
                  </div>
                  <div class="card-body">
                    <form action="tulis_proses.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="hidden" name="status" value="Belum Dikonfirmasi">
                        <input type="text" class="form-control" name="nik" value="<?php echo $_SESSION['nik'] ?>" required="required" readonly>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly>
                        <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="tgl_pengaduan">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TKP</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="tkp" required="required">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Laporan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" style="height: 75px;" name="isi_laporan" required="required"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Otentik</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Pilih File</label>
                          <input type="file" name="foto" id="image-upload" required="required" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group" style="text-align: center;">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="form-group">
                        <button class="btn btn-danger" onclick="self.history.back()">Kembali</button>
                        <button class="btn btn-primary">Kirim</button>
                      </div>
                    </div>
                    </form>
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