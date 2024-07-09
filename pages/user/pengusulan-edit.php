<?php
session_start();
include "../config_sqli.php";

// Check connection
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

$id=$_POST["id_pengusulan"];
$nama_lgkp=$_SESSION["username"];
$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$progress_pengusulan = $_POST['proses_pengusulan'];

$tz = 'Asia/Makassar';
$dt = new DateTime("now", new DateTimeZone($tz));
$time_entry = $dt->format('Y-m-d G:i:s');
 
// Prepare the SQL UPDATE statement
$query = "UPDATE pengusulan 
          SET nama_barang = ?, 
              satuan_barang = ?, 
              jumlah_barang = ?, 
              tgl_update_pengusulan = ?, 
              nama_pengusulan = ?, 
              progress_pengusulan = ?, 
              alasan = 'none' 
          WHERE id = ?";

$stmt = $konek->prepare($query);

// Check if the preparation was successful
if ($stmt === false) {
    die("Failed to prepare query: " . htmlspecialchars($konek->error));
}

// Bind the parameters
$stmt->bind_param("ssissii", $nama_barang, $satuan_barang, $jumlah_barang, $time_entry, $nama_lgkp, $progress_pengusulan, $id);

// Execute the statement
if ($stmt->execute()) {
    $_SESSION["sukses"] = 'Pengusulan Berhasil Diupdate. Terima kasih ya :)';
} else {
    $_SESSION["gagal"] = 'Pengusulan Gagal Diupdate. Silahkan diperiksa kembali ya :(';
}

// Close the statement and connection
$stmt->close();
$konek->close();

// Redirect to pengusulan.php
header('Location: pengusulan.php');
exit();
?>
