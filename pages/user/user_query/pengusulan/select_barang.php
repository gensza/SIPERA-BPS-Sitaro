<?php
// Include database connection parameters
include "../../../config_sqli.php";

// Check connection
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

// Prepare the SQL statement
$query = "SELECT * FROM barang ORDER BY `id` ASC";
$stmt = $konek->prepare($query);

// Check if the preparation was successful
if ($stmt === false) {
    die("Failed to prepare query: " . htmlspecialchars($konek->error));
}

// Execute the statement
if (!$stmt->execute()) {
    die("Failed to execute query: " . htmlspecialchars($stmt->error));
}

// Get the result
$result = $stmt->get_result();

// Fetch all results as an associative array
$options = $result->fetch_all(MYSQLI_ASSOC);

// Free the result and close the statement
$result->free();
$stmt->close();

// Close the connection
$konek->close();

// Convert the PHP array to JSON format and output it
header('Content-Type: application/json');
echo json_encode($options);
?>
