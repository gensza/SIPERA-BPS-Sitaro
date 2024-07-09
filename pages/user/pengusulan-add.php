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

	$add=mysqli_query($konek, "INSERT INTO `pengusulan`(`nama_barang`, `satuan_barang`, `jumlah_barang`, `tgl_pengusulan`, `tgl_update_pengusulan`, `nama_pengusulan`, `progress_pengusulan`, `alasan`) VALUES
	('$nama_barang', '$satuan_barang', '$jumlah_barang','$time_entry', '0000-00-00', '$nama_lgkp', '0', 'none')") or die(mysqli_error($konek));
	  if($add==true) {
	    $_SESSION["sukses"] = 'Pengusulan Berhasil Disimpan. Terima kasih ya :)';
		} else {
			$_SESSION["gagal"] = 'Pengusulan Gagal Disimpan. Silahkan diperiksa kembali ya :(';
		}
		header('Location: pengusulan.php'); 

?>
