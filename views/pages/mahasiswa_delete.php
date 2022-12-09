<?php
// koneksi database
include '../../connection.php';

if (isset($_POST['hapusdata'])) {
    $query = mysqli_query($connection, "delete from mahasiswa where nim='$_POST[nim]'");
    if ($query) {
        header("location:mahasiswa.php");
    }
}
