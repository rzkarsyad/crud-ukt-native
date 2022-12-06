<?php
// koneksi database
include '../../connection.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$tgl_bayar = $_POST['tgl_bayar'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];

// menginput data ke database
mysqli_query($connection, "insert into pembayaran_ukt values(NULL, '$nim', '$tgl_bayar', '$jumlah', '$status')");

header("location:ukt.php");
