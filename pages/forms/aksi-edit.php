<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$stok_barang = $_POST['stok_barang'];

$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');
	
	if(isset($_POST['ubah_foto'])){
		
		$lokasi_file  = $_FILES['photo_barang']['tmp_name'];
		$nama_file = $_FILES['photo_barang']['name'];
		$tipe_file = $_FILES['photo_barang']['type'];
		$ukuran_file = $_FILES['photo_barang']['size']; 
		$nama_baru = date('dmYHis').$nama_file;
		$direktori = "../path/".$nama_baru;

		$MAX_FILE_SIZE = 10000000;

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
	$edit = "SELECT * FROM `barang` WHERE `id`='$id'";
    $sql = mysqli_query($konek, $edit);
    $barang00 = mysqli_fetch_array($sql);
	
    if(is_file("../path/".$barang00['photo_barang']))
      unlink("../path/".$barang00['photo_barang']);
	
if($edit = mysqli_query($konek, "UPDATE `barang` SET nama_barang='$nama_barang', satuan_barang='$satuan_barang', stok_barang='$stok_barang', photo_barang='$nama_baru' WHERE id='$id'"));
if($edit==true) {
			$_SESSION["sukses"] = 'Update Barang Berhasil Disimpan. Terima kasih ya.. :)';
			} else {
			$_SESSION["gagal"] = 'Update Barang Gagal Disimpan. Silahkan dicoba kembali ya.. :(';
			}
			header('Location: stok.php'); 
		exit();}
	}else{
		if($edit = mysqli_query($konek, "UPDATE `barang` SET nama_barang='$nama_barang', satuan_barang='$satuan_barang', stok_barang='$stok_barang' WHERE id='$id'"));
		if($edit==true) {
			$_SESSION["sukses"] = 'Update Barang Berhasil Disimpan. Terima kasih ya.. :)';
			} else {
				$_SESSION["gagal"] = 'Update Barang Gagal Disimpan. Silahkan dicoba kembali ya.. :(';
			}
			header('Location: stok.php'); 
			exit();
	}
?>
