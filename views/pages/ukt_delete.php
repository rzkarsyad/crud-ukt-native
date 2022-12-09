<?php
// koneksi database
include '../../connection.php';

if (isset($_POST['hapusdataUKT'])) {
    $query = mysqli_query($connection, "delete from pembayaran_ukt where id='$_POST[id]'");
    if ($query) {
        header("location:ukt.php");
    }
}
