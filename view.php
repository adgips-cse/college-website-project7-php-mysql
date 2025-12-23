<!-- File: view.php -->
<?php
include "connect.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$result = mysqli_query($conn, "SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <h2>Student List</h2>

    <p><b>Session User:</b> <?php echo $_SESSION['user'] ?? ''; ?></p>
    <p><b>Cookie User:</b> <?php echo $_COOKIE['user'] ?? ''; ?></p>

    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
