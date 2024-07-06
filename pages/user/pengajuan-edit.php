<?php
session_start();
include "../config_sqli.php";

// Check connection
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

$id=$_POST["id_pengajuan"];
$nama_lgkp=$_SESSION["username"];
$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$progress_pengajuan = $_POST['proses_pengajuan'];

$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');
 
// Prepare the SQL UPDATE statement
$query = "UPDATE pengajuan 
          SET nama_barang = ?, 
              satuan_barang = ?, 
              jumlah_barang = ?, 
              tgl_update_pengajuan = ?, 
              nama_pengajuan = ?, 
              progress_pengajuan = ?, 
              alasan = 'none' 
          WHERE id = ?";

$stmt = $konek->prepare($query);

// Check if the preparation was successful
if ($stmt === false) {
    die("Failed to prepare query: " . htmlspecialchars($konek->error));
}

// Bind the parameters
$stmt->bind_param("ssissii", $nama_barang, $satuan_barang, $jumlah_barang, $time_entry, $nama_lgkp, $progress_pengajuan, $id);

// Execute the statement
if ($stmt->execute()) {
    $_SESSION["sukses"] = 'Pengajuan Berhasil Diupdate. Terima kasih ya :)';
} else {
    $_SESSION["gagal"] = 'Pengajuan Gagal Diupdate. Silahkan diperiksa kembali ya :(';
}

// Close the statement and connection
$stmt->close();
$konek->close();

// Redirect to pengajuan.php
header('Location: pengajuan.php');
exit();
?>
