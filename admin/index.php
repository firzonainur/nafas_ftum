<?php 
include '../config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
ob_start();
session_start();
if(!isset($_SESSION['username']) header('Location: ../login.html')

// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];

?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>