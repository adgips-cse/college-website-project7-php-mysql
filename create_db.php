<!-- File: create_db.php -->
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS college";

if (mysqli_query($conn, $sql)) {
    echo "Database is ready (created or already exists)";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
