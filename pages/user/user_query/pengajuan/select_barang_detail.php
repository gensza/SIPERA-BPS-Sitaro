<?php
// Include database connection parameters
include "../../../config_sqli.php";

// Check connection
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

$selectedBarang = $_POST['selectedBarang'];
// Prepare the SQL statement
$query = "
    SELECT *, 
           (SELECT SUM(jumlah_barang) 
            FROM pengajuan 
            WHERE nama_barang = ? AND MONTH(tgl_pengajuan) = MONTH(CURDATE()) 
            AND YEAR(tgl_pengajuan) = YEAR(CURDATE())
           ) AS total_count
    FROM barang 
    WHERE nama_barang = ?
";
$stmt = $konek->prepare($query);
$stmt = $konek->prepare($query);

// Check if the preparation was successful
if ($stmt === false) {
    die("Failed to prepare query: " . htmlspecialchars($konek->error));
}

// Bind the ID parameter to the query
$stmt->bind_param("ss", $selectedBarang, $selectedBarang);

// Execute the statement
if (!$stmt->execute()) {
    die("Failed to execute query: " . htmlspecialchars($stmt->error));
}

// Get the result
$result = $stmt->get_result();

// Fetch the result as an associative array
$options = $result->fetch_assoc();

// Free the result and close the statement
$result->free();
$stmt->close();

// Close the connection
$konek->close();

// Convert the PHP array to JSON format and output it
header('Content-Type: application/json');
echo json_encode($options);
?>
