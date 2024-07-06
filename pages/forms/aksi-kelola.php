<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$stok_barang = $_POST['stok_barang'];
$keterangan = $_POST['keterangan'];
$j_masuk_keluar = $_POST['j_masuk_keluar'];
$nama_lgkp = $_SESSION["nama_lgkp"];
$total = $stok_barang + $j_masuk_keluar;
$totalkeluar = $stok_barang - $j_masuk_keluar;
$kurang_stok = $j_masuk_keluar > $stok_barang;
$randNumber = rand(10,10000);

$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');

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
		if ($kurang_stok==true && $keterangan == '2' ){
			$_SESSION["gagal"] = 'Ooops stok kurang. Silahkan diperhatikan kembali ya stoknya :)';
			header('Location: stok.php'); 
		exit();
		}else{

		if ($keterangan == '1' ){	
			//$total = $stok_barang + $j_masuk_keluar;
		if(move_uploaded_file($lokasi_file, $direktori));
		
		$add=mysqli_query($konek, "INSERT INTO `history`(`nama_barang`, `satuan_barang`, `stok_barang`, `keterangan`, `j_masuk_keluar`, `photo_barang`, `time`, `user`) VALUES 
		  ('$nama_barang', '$satuan_barang', '$total', '$keterangan', '$j_masuk_keluar', '$nama_baru', '$time_entry', '$nama_lgkp')") or die(mysqli_error($konek));
		  
		$sumstok = mysqli_query($konek, "UPDATE `barang` SET `stok_barang`='$total', `time_entry`='$time_entry' WHERE nama_barang='$nama_barang'");
		  	
			if($add==true && $sumstok==true) {
				$_SESSION["sukses"] = 'Data Barang Masuk Berhasil Disimpan. Terima kasih ya :)';
				} else {
				$_SESSION["gagal"] = 'Data Barang Masuk Gagal Disimpan. Silahkan diperiksa kembali ya :(';
				}	
			header('Location: stok.php'); 
		}elseif($keterangan == '2' ){
			//$totalkeluar = $stok_barang - $j_masuk_keluar;
			if(move_uploaded_file($lokasi_file, $direktori));
			
			$add=mysqli_query($konek, "INSERT INTO `history`(`nama_barang`, `satuan_barang`, `stok_barang`, `keterangan`, `j_masuk_keluar`, `photo_barang`, `time`, `user`) VALUES 
			('$nama_barang', '$satuan_barang', '$totalkeluar', '$keterangan', '$j_masuk_keluar', '$nama_baru', '$time_entry', '$nama_lgkp')") or die(mysqli_error($konek));
		  	
			  $sumstok2 = mysqli_query($konek, "UPDATE `barang` SET `stok_barang`='$totalkeluar', `time_entry`='$time_entry' WHERE nama_barang='$nama_barang'");
		  	
			if($add==true && $sumstok2==true) {
				$_SESSION["sukses"] = 'Data Barang Keluar Berhasil Disimpan. Terima kasih ya :)';
				} else {
				$_SESSION["gagal"] = 'Data Barang Keluar Gagal Disimpan. Silahkan diperiksa kembali ya :(';
				}
			header('Location: stok.php'); 
		}
		exit();
	}
?>

 

