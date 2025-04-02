<?php
require 'vendor/autoload.php'; // MPDF Library लोड करें

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mpdf = new \Mpdf\Mpdf();

    // Resume डेटा लोड करें
    $html = "
        <h2>Resume</h2>
        <p><strong>Name:</strong> {$_POST['name']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Phone:</strong> {$_POST['phone']}</p>
        <p><strong>Address:</strong> {$_POST['address']}</p>
        <h3>Skills</h3>
        <p>{$_POST['skills']}</p>
        <h3>Education</h3>
        <p>{$_POST['education']}</p>
        <h3>Experience</h3>
        <p>{$_POST['experience']}</p>
    ";

    // HTML को PDF में कन्वर्ट करें
    $mpdf->WriteHTML($html);
    $mpdf->Output("Resume.pdf", "D"); // PDF डाउनलोड करें
}
?>
