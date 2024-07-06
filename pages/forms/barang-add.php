<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$nama_barang = strtoupper($_POST['nama_barang']);
$satuan_barang = $_POST['satuan_barang'];
$stok_barang = $_POST['stok_barang'];
$nama_lgkp = $_SESSION["nama_lgkp"];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');

$lokasi_file  = $_FILES['photo_barang']['tmp_name'];
$nama_file = $_FILES['photo_barang']['name'];
$tipe_file = $_FILES['photo_barang']['type'];
$ukuran_file = $_FILES['photo_barang']['size']; 
$nama_baru = date('dmYHis').$nama_file;
$direktori = "../path/".$nama_baru;

		$MAX_FILE_SIZE = 10000000000;

		$formatpic = array("image/jpg","image/jpeg");
		if(!in_array($tipe_file, $formatpic)) {
		$_SESSION["gagal"] = 'Ooops ekstensi file harus .jpg ya :)';
		header('Location: stok.php'); 
		exit();
		}

		if($ukuran_file > $MAX_FILE_SIZE) {
		  $_SESSION["gagal"] = 'Ooops kapasitas gambar kebesaran ya. batasnya hanya 9mb';
		  header('Location: stok.php'); 
		  exit();
		}
		
		if(move_uploaded_file($lokasi_file, $direktori));{
		
		  if  ($add=mysqli_query($konek, "INSERT INTO `barang`(`nama_barang`, `satuan_barang`, `stok_barang`, `photo_barang`, `status`, `time_entry`, `pengguna`) VALUES 
		  ('$nama_barang', '$satuan_barang', '$stok_barang', '$nama_baru', '0', '$time_entry', '$nama_lgkp')") or die(mysqli_error($konek)));
		  	if($add==true) {
				$_SESSION["sukses"] = 'Barang Berhasil Disimpan. Terima kasih ya :)';
				} else {
				$_SESSION["gagal"] = 'Barang Gagal Disimpan. Silahkan diperiksa kembali ya :(';
				}
		header('Location: stok.php'); 
		exit();
		}
?>

 

