<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Resume Builder</h2>
<form method="POST" action="generate_pdf.php">
    Full Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone" required><br>
    Address: <input type="text" name="address" required><br>
    Skills: <textarea name="skills" required></textarea><br>
    Education: <textarea name="education" required></textarea><br>
    Experience: <textarea name="experience" required></textarea><br>
    <button type="submit">Generate Resume</button>
</form>
