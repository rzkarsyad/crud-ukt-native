<?php
// koneksi database
include '../../connection.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($connection, "delete from pembayaran_ukt where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:ukt.php");
