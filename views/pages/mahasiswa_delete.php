<?php
// koneksi database
include '../../connection.php';

// menangkap data id yang di kirim dari url
$nim = $_GET['nim'];

// menghapus data dari database
mysqli_query($connection, "delete from mahasiswa where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
