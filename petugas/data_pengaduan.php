<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  if(!isset($_SESSION['level'])) {
    echo "<script>alert('Anda Belum Login!'); window.location='../petugas/';</script>";
  }
?>

<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pengaduan Masyarakat!</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/app.min.css">
  <link rel="stylesheet" href="../assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="../assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <?php include 'layout.php'; 
  ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Laporan</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Tanggal</th>
                            <th>TKP</th>
                            <th>Laporan</th>
                            <th>Tanggapan</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            include '../db_connect.php';
                            $no = 1;
                            $datalaporan = mysqli_query($koneksi, "SELECT * FROM pengaduan ORDER BY id_pengaduan DESC");
                            foreach ($datalaporan as $row) {
                          ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['tgl_pengaduan']; ?></td>
                            <td><?php echo $row['tkp']; ?></td>
                            <td><?php echo $row['isi_laporan']; ?></td>
                            <td><?php echo $row['tanggapan']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                              <a class="btn btn-primary" href="detail_pengaduan.php?id=<?php echo $row['id_pengaduan']; ?>">Tanggapi</a>
                            </td>
                          </tr>
                          <?php 
                            $no++;
                          }
                          ?>
                        </tbody>
                      </table>
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
  <script src="../assets/bundles/datatables/datatables.min.js"></script>
  <script src="../assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>