<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$id = $_GET["id"];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$datenow = $dt->format('Y-m-d G:i:s');

if($delete = mysqli_query($konek, "UPDATE `i_us3r` SET `flag`='3', `time_entry`='$datenow' WHERE id='$id'")){
    $_SESSION["sukses"] = 'Data Pengguna Berhasil Dihapus. Terima kasih ya :)';
    } else {
    $_SESSION["gagal"] = 'Data Pengguna Gagal Dihapus. Silahkan diperiksa kembali ya :(';
    }
    header('Location: manajemen-pengguna.php'); 
	exit();
?>
