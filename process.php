<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $auditionType = $_POST["auditionType"];

    // Create the email message
    $to = "aayushkewat0710@gmail.com"; // Replace with your email address
    $subject = "Audition Registration";
    $message = "Full Name: $fullName\nEmail: $email\nPhone: $phone\nAudition Type: $auditionType";

    // Send the email
    mail($to, $subject, $message);

    // Redirect to a thank-you page or display a confirmation message
    header("Location: thank_you.html"); // Create a thank_you.html file
    exit();
}
?>
