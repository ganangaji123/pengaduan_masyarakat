<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/csslog.css">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/csslog.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>
<body>

<div class="kotak_login" style="width: 500px !important">
	<img class="bg" src="assets/img/logoo.png">
	<hr>

	<h2 class="tulisan_login">Registrasi</h2>
 
	<form action="daftar.php" method="post">
		<input type="number" class="form-control" name="nik" placeholder="NIK">

		<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
 
		<input type="text" class="form-control" name="username" placeholder="Username">

		<input type="password" class="form-control" name="password" placeholder="Password">

		<input type="number" class="form-control" name="telp" placeholder="Telepon">
 
		<button type="submit" class="btn btn-primary" style="width: 100%;">Daftar</button>
		<br><br>
		<button type="button" class="btn btn-danger" onclick="self.history.back()" style="width: 100%;">Kembali</button>
		</p>
	</form>
	
</div>

</body>
</html>