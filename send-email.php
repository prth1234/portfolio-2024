<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email from the form submission
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Email details
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Email Submission";
    $message = "You have received a new email submission: " . $email;
    $headers = "From: no-reply@example.com"; // Replace with a valid sender email address

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your submission has been received!";
    } else {
        echo "Oops! Something went wrong while submitting the form.";
    }
} else {
    echo "Invalid request method.";
}
?>
