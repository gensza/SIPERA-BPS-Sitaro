<?php
session_start();
include "../config_sqli.php";

$id = $_GET["id"];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$datenow = $dt->format('Y-m-d G:i:s');
$alasan = $_GET["alasan"];

if($delete = mysqli_query($konek, "UPDATE `pengajuan` SET `progress_pengajuan`='2', `alasan`='$alasan', `tgl_update_pengajuan`='$datenow' WHERE id='$id'")){
    $_SESSION["sukses"] = 'Pengajuan Berhasil Ditolak. Terima kasih ya :)';
    } else {
    $_SESSION["gagal"] = 'Pengajuan Gagal Ditolak. Silahkan diperiksa kembali ya :(';
    }
    header('Location: pengajuan.php'); 
	exit();
?>
