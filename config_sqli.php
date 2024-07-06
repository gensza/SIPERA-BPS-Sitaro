<?php
$konek = mysqli_connect("localhost", "root", "root", "stok_app");
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
    }
?>