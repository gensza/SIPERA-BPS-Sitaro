<?php
session_start();
include "../config_sqli.php";

$id = $_GET["id"];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$datenow = $dt->format('Y-m-d G:i:s');
$alasan = $_GET["alasan"];

if($delete = mysqli_query($konek, "UPDATE `pengusulan` SET `progress_pengusulan`='2', `alasan`='$alasan', `tgl_update_pengusulan`='$datenow' WHERE id='$id'")){
    $_SESSION["sukses"] = 'Pengusulan Berhasil Ditolak. Terima kasih ya :)';
    } else {
    $_SESSION["gagal"] = 'Pengusulan Gagal Ditolak. Silahkan diperiksa kembali ya :(';
    }
    header('Location: pengusulan.php'); 
	exit();
?>
