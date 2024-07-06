<?php
session_start();
include "../config_sqli.php";

$id = $_GET["id"];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$datenow = $dt->format('Y-m-d G:i:s');

if($delete = mysqli_query($konek, "UPDATE `barang` SET `status`='1', `time_entry`='$datenow' WHERE id='$id'")){
    $_SESSION["sukses"] = 'Data Barang Berhasil Dihapus. Terima kasih ya :)';
    } else {
    $_SESSION["gagal"] = 'Data Barang Gagal Dihapus. Silahkan diperiksa kembali ya :(';
    }
    header('Location: stok.php'); 
	exit();
?>
