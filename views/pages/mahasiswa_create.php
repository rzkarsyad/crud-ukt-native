<?php
// koneksi database
include '../../connection.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$tahun_masuk = $_POST['tahun_masuk'];
$semester = $_POST['semester'];

// menginput data ke database
mysqli_query($connection, "insert into mahasiswa values('$nama', '$nim', '$jk', '$kelas', '$prodi', '$alamat', '$tahun_masuk', '$semester')");

header("location:mahasiswa.php");
