<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  if(!isset($_SESSION['level'])) {
    echo "<script>alert('Anda Belum Login!'); window.location='../petugas/';</script>";
  }
?>

<!-- profile.html  21 Nov 2019 03:49:30 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pengaduan Masyarakat!</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/app.min.css">
  <link rel="stylesheet" href="../assets/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="../assets/bundles/summernote/summernote-bs4.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
</head>

<body>
  <?php include 'layout.php';
  ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="../assets/img/user.png" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div><br>
                      <div class="author-box-name">
                        <span style="color: blue;"><?php echo $_SESSION['nama_petugas']; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <div class="tab-content tab-bordered" id="myTab3Content">
                  <div class="card-header">
                    <h4>Data Pengguna</h4>
                  </div>
                  <div class="card-body">
                    <form method="POST">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <div class="input-group">
                          <input id="name" type="text" class="form-control" name="nama_petugas" value="<?php echo $_SESSION['nama_petugas']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                          <input type="text" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                          <input type="text" class="form-control" value="<?php echo $_SESSION['password']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Nomer Telepon</label>
                        <div class="input-group">
                        <span style="margin-top: 11px;font-size: 14px;color: #495057;">(+62)</span>&nbsp;
                          <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['telp']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Level</label>
                        <div class="input-group">
                          <input type="text" class="form-control" value="<?php echo $_SESSION['level']; ?>" readonly>
                        </div>
                      </div>
                    </form>
                  </div>
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
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
</body>


<!-- profile.html  21 Nov 2019 03:49:32 GMT -->
</html>