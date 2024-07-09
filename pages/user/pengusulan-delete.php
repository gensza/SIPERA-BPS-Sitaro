<?php
session_start();
include "../config_sqli.php";

// Check connection
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

$id = $_POST["id_pengusulan_delete"];

// Prepare the SQL UPDATE statement
$query = "DELETE FROM pengusulan 
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
    $_SESSION["sukses"] = 'Pengusulan Berhasil Di Hapus. Terima kasih ya :)';
} else {
    $_SESSION["gagal"] = 'Pengusulan Gagal Di Hapus. Silahkan diperiksa kembali ya :(';
}

// Close the statement and connection
$stmt->close();
$konek->close();

// Redirect to pengusulan.php
header('Location: pengusulan.php');
exit();
?>
