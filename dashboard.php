<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
<a href="resume.php">Create Resume</a>
<a href="logout.php">Logout</a>
