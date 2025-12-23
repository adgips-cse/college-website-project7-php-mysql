<!-- File: create_table.php -->
<?php
// connect to MySQL server AND database
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully/Ready";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>
