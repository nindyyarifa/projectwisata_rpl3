<?php
session_start();
// Menghapus semua data sesi
session_unset();
// Menghancurkan sesi
session_destroy();
// Mengarahkan kembali ke halaman index.php
header("location: ../index.php");
?>