<?php
// koneksi database
include '../../connection.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$tgl_bayar = $_POST['tgl_bayar'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];

// update data ke database
mysqli_query($connection, "update pembayaran_ukt set id='$id', nim='$nim', tgl_bayar='$tgl_bayar', jumlah='$jumlah', status='$status' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:ukt.php");
