<?php
// koneksi database
include '../../connection.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$old_nim = $_POST['old_nim'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$tahun_masuk = $_POST['tahun_masuk'];
$semester = $_POST['semester'];

// update data ke database
mysqli_query($connection, "update mahasiswa set nama='$nama', nim='$nim', jk='$jk', kelas='$kelas', prodi='$prodi', alamat='$alamat', tahun_masuk='$tahun_masuk', semester='$semester' where mahasiswa.nim='$old_nim'");

// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
