<!-- File: insert.php -->
<?php
include "connect.php";
session_start();

$name  = $_POST['name'];
$email = $_POST['email'];

// Insert data
$sql = "INSERT INTO students(name, email) VALUES('$name', '$email')";
mysqli_query($conn, $sql);

// Session
$_SESSION['user'] = $name;

// Cookie
setcookie("user", $name, time() + 3600);

header("Location: view.php");
?>
