<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$nama_lgkp = $_POST['nama_lgkp'];
$username = $_POST['username'];
$password = $_POST['password'];
$pass_hash = password_hash($password, PASSWORD_DEFAULT);
$nip = $_POST['nip'];
$jabatan = $_POST['jabatan'];
$flag = $_POST['flag'];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');

$lokasi_file  = $_FILES['photo']['tmp_name'];
$nama_file = $_FILES['photo']['name'];
$tipe_file = $_FILES['photo']['type'];
$ukuran_file = $_FILES['photo']['size']; 
$nama_baru = date('dmYHis').$nama_file;
$direktori = "../path/".$nama_baru;

		$MAX_FILE_SIZE = 10000000;

		$formatpic = array("image/jpg","image/jpeg");
		if(!in_array($tipe_file, $formatpic)) {
		$_SESSION["gagal"] = 'Ooops ekstensi file harus .jpg ya :) Silahkan dicoba kembali';
		header('Location: manajemen-pengguna.php'); 
		exit();
		}

		if($ukuran_file > $MAX_FILE_SIZE) {
		  $_SESSION["gagal"] = 'Ooops kapasitas gambar kebesaran ya. batasnya hanya 9mb. Silahkan dicoba kembali';
		  header('Location: manajemen-pengguna.php'); 
		  exit();
		}
		
		if(move_uploaded_file($lokasi_file, $direktori));{
		
		  if  ($add=mysqli_query($konek, "INSERT INTO `i_us3r`(`username`, `password`, `nama_lgkp`, `nip`, `jabatan`, `flag`, `photo`, `time_entry`) VALUES 
		  ('$username', '$pass_hash', '$nama_lgkp', '$nip', '$jabatan', '$flag', '$nama_baru', '$time_entry')") or die(mysqli_error($konek)));
		  	if($add==true) {
				$_SESSION["sukses"] = 'Pengguna Berhasil Ditambahkan. Terima kasih ya :)';
				} else {
				$_SESSION["gagal"] = 'Pengguna Gagal Ditambahkan. Silahkan diperiksa kembali ya :(';
				}
		header('Location: manajemen-pengguna.php'); 
		exit();
		}
?>

 

