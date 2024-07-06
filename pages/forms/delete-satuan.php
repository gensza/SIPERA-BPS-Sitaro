<?php
session_start();
include '../config_sqli.php';
include "auth_user.php";

$id   = $_GET['id'];
$add = mysqli_query($konek, "DELETE FROM `satuan` WHERE id='$id'");
    if($add==true) {
        $_SESSION["sukses"] = 'Satuan Berhasil Dihapus. Terima kasih ya :)';
        } else {
        $_SESSION["gagal"] = 'Satuan Gagal Dihapus. Silahkan diperiksa kembali ya :(';
        }
            header('Location: stok.php'); 
?>