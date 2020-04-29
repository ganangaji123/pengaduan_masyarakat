<?php 
  session_start();
?>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
        </div>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <ul class="sidebar-menu">
            <li class="menu-header">Profil</li>
            <li>
              <a href="profil.php">
                <img alt="image" style="height: 40px;width: 40px;" src="../assets/img/user.png"
                class="user-img-radious-style">&nbsp;&nbsp;<span class="d-sm-none d-lg-inline-block"><?php echo $_SESSION['nama_petugas']; ?></span>
              </a>
            </li>
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="home.php" class="nav-link"><i data-feather="log-out"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="data_pengaduan.php" class="nav-link"><i data-feather="circle"></i><span>Data Pengaduan</span></a>
            </li>
            <li class="menu-header">User</li>
            <li class="dropdown">
              <a href="data_petugas.php" class="nav-link"><i data-feather="user"></i><span>Data Petugas</span></a>
            </li>
            <li class="dropdown">
              <a href="data_masyarakat.php" class="nav-link"><i data-feather="users"></i><span>Data Masyarakat</span></a>
            </li>
            <li class="menu-header">Setting</li>
            <li>
              <a class="nav-link" href="logout.php"><i data-feather="log-out">
              </i><span>Logout</span></a>
            </li>
          </ul>
        </aside>
      </div>