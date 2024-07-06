<?php
session_start();
include "../config_sqli.php";
$nama_lgkp=$_SESSION["username"];
//$nama_satuan = strtoupper($_POST['nama_satuan']);
$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$jumlah_barang = $_POST['jumlah_barang'];

$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');

	$add=mysqli_query($konek, "INSERT INTO `pengajuan`(`nama_barang`, `satuan_barang`, `jumlah_barang`, `tgl_pengajuan`, `tgl_update_pengajuan`, `nama_pengajuan`, `progress_pengajuan`, `alasan`) VALUES
	('$nama_barang', '$satuan_barang', '$jumlah_barang','$time_entry', '0000-00-00', '$nama_lgkp', '0', 'none')") or die(mysqli_error($konek));
	  if($add==true) {
	    $_SESSION["sukses"] = 'Pengajuan Berhasil Disimpan. Terima kasih ya :)';
		} else {
			$_SESSION["gagal"] = 'Pengajuan Gagal Disimpan. Silahkan diperiksa kembali ya :(';
		}
		header('Location: pengajuan.php'); 

?>
