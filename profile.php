<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h1>
<a href="logout.php">Выйти</a>