<?php
session_start();

session_unset();

session_destroy();

echo "<script>alert('Anda Telah Keluar!'); window.location = '../admin/'</script>";
?>