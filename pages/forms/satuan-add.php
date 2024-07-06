<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

//$nama_satuan = strtoupper($_POST['nama_satuan']);
$status = $_POST['status'];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');

if(!empty($_POST['nama_satuan'])){
		$nama_satuan = strtoupper($_POST['nama_satuan']);
	}elseif (empty($_POST['nama_satuan'])){
		echo "<script>alert('Silahkan Mengisi Satuan !'); window.history.back();</script>";
		  exit();
	}
	if(!empty($_POST['status'])){
			$status = ($_POST['status']);
		}elseif (empty($_POST['status'])){
			echo "<script>alert('Silahkan Memilih Status Barang !'); window.history.back();</script>";
			  exit();
		}

	$add=mysqli_query($konek, "INSERT INTO `satuan`(`nama_satuan`, `status`, `time_entry`) VALUES
	('$nama_satuan', '$status', '$time_entry')") or die(mysqli_error($konek));
	  if($add==true) {
	    $_SESSION["sukses"] = 'Satuan Berhasil Disimpan. Terima kasih ya :)';
		} else {
			$_SESSION["gagal"] = 'Satuan Gagal Disimpan. Silahkan diperiksa kembali ya :(';
		}
		header('Location: stok.php'); 

?>
