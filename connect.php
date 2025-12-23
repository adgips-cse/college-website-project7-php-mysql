<!-- File: coonect.php-->
<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project 7 - PHP & MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <h2>Student Registration</h2>

    <form action="insert.php" method="post">
        Name:<br>
        <input type="text" name="name" required><br><br>

        Email:<br>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <br>
    <a href="view.php">View Students</a>
</div>
</body>
</html>
