<?php
session_start();
include "../config_sqli.php";

// Check connection
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

$id = $_POST["id_pengajuan_delete"];

// Prepare the SQL UPDATE statement
$query = "DELETE FROM pengajuan 
          WHERE id = ?";

$stmt = $konek->prepare($query);

// Check if the preparation was successful
if ($stmt === false) {
    die("Failed to prepare query: " . htmlspecialchars($konek->error));
}

// Bind the parameters
$stmt->bind_param("i", $id);

// Execute the statement
if ($stmt->execute()) {
    $_SESSION["sukses"] = 'Pengajuan Berhasil Di Hapus. Terima kasih ya :)';
} else {
    $_SESSION["gagal"] = 'Pengajuan Gagal Di Hapus. Silahkan diperiksa kembali ya :(';
}

// Close the statement and connection
$stmt->close();
$konek->close();

// Redirect to pengajuan.php
header('Location: pengajuan.php');
exit();
?>
