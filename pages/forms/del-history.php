<?php
session_start();
include "../config_sqli.php";
include "auth_user.php";

$id = $_GET["id"];
$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$datenow = $dt->format('Y-m-d G:i:s');

if($delete = mysqli_query($konek, "UPDATE `history` SET `flag`='1', `time`='$datenow' WHERE id='$id'")){
    $_SESSION["sukses"] = 'Data History Berhasil Dihapus. Terima kasih ya :)';
    } else {
    $_SESSION["gagal"] = 'Data History Gagal Dihapus. Silahkan diperiksa kembali ya :(';
    }
    header('Location: stok.php'); 
	exit();
?>
