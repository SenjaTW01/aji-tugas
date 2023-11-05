<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $username; ?></h1>
    <p>Kembali ke <a href="index.php">index.php</a></p>
</body>
</html>