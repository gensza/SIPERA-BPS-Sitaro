<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$id = $_POST['id'];
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
	
	if(isset($_POST['ubah_foto'])){
		
		$lokasi_file  = $_FILES['photo']['tmp_name'];
		$nama_file = $_FILES['photo']['name'];
		$tipe_file = $_FILES['photo']['type'];
		$ukuran_file = $_FILES['photo']['size']; 
		$nama_baru = date('dmYHis').$nama_file;
		$direktori = "../path/".$nama_baru;

		$MAX_FILE_SIZE = 10000000;

		$formatpic = array("image/jpg","image/jpeg");
		if(!in_array($tipe_file, $formatpic)) {
		$_SESSION["gagal"] = 'Ooops ekstensi file harus .jpg ya :). Silahkan diperiksa kembali ya';
		header('Location: manajemen-pengguna.php'); 
		exit();
		}

		if($ukuran_file > $MAX_FILE_SIZE) {
		  $_SESSION["gagal"] = 'Ooops kapasitas gambar kebesaran ya. batasnya hanya 9mb. Silahkan diperiksa kembali ya';
		  header('Location: manajemen-pengguna.php'); 
		  exit();
		}

		
if(move_uploaded_file($lokasi_file, $direktori));{
	$edit = "SELECT * FROM `i_us3r` WHERE `id`='$id'";
    $sql = mysqli_query($konek, $edit);
    $user00 = mysqli_fetch_array($sql);
	
    if(is_file("../path/".$user00['photo']))
      unlink("../path/".$user00['photo']);
	
if($edit = mysqli_query($konek, "UPDATE `i_us3r` SET nama_lgkp='$nama_lgkp', username='$username', password='$pass_hash', jabatan='$jabatan', nip='$nip', flag='$flag', photo='$nama_baru' WHERE id='$id'"));
if($edit==true) {
			$_SESSION["sukses"] = 'Update Pengguna Berhasil Disimpan. Terima kasih ya.. :)';
			} else {
			$_SESSION["gagal"] = 'Update Pengguna Gagal Disimpan. Silahkan dicoba kembali ya.. :(';
			}
			header('Location: manajemen-pengguna.php'); 
		exit();}
	}else{
		if($edit = mysqli_query($konek, "UPDATE `i_us3r` SET nama_lgkp='$nama_lgkp', username='$username', password='$pass_hash', jabatan='$jabatan', nip='$nip', flag='$flag' WHERE id='$id'"));
		if($edit==true) {
			$_SESSION["sukses"] = 'Update Pengguna Berhasil Disimpan. Terima kasih ya.. :)';
			} else {
				$_SESSION["gagal"] = 'Update Pengguna Gagal Disimpan. Silahkan dicoba kembali ya.. :(';
			}
			header('Location: manajemen-pengguna.php'); 
			exit();
	}
?>
