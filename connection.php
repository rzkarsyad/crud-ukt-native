<?php 
$connection = mysqli_connect("localhost","root","","ukt");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>