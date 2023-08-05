<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "michaelzatey@gmail.com"; // Replace with the recipient's email address
    $subject = "Form Submission"; // Replace with the subject of the email

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $message = $_POST["subject"];

    // Email headers
    $headers = "From: " . $firstname . " " . $lastname . " <" . $to . ">" . "\r\n";
    $headers .= "Reply-To: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank-you page or back to the form page
    header("Location: index.html"); // Replace with your thank-you page URL or the form page URL
    exit();
}
?>
