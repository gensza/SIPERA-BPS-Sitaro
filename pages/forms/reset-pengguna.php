<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$id = $_GET["id"];
$tz = 'Asia/Makassar';
$newpass = "bps7103";
$pass_hash = password_hash($newpass, PASSWORD_DEFAULT);
$dt = new DateTime("now", new DateTimeZone($tz));
$datenow = $dt->format('Y-m-d G:i:s');

if($delete = mysqli_query($konek, "UPDATE `i_us3r` SET `password`='$pass_hash', `time_entry`='$datenow' WHERE id='$id'")){
    $_SESSION["sukses"] = 'Data Pengguna Berhasil Direset. Terima kasih ya :)';
    } else {
    $_SESSION["gagal"] = 'Data Pengguna Gagal Direset. Silahkan diperiksa kembali ya :(';
    }
    header('Location: manajemen-pengguna.php'); 
	exit();
?>
