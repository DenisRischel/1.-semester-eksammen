<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form input values using POST method
    $name = htmlspecialchars($_POST['firstname']);  // First name (Full name)
    $email = htmlspecialchars($_POST['lastname']);  // Email address
    $subject = htmlspecialchars($_POST['subject']);  // Subject/message content
    
    // Your email address where you want to receive the form data
    $to = "denisrischel@gmail.com";  // Your email address

    // The subject of the email
    $email_subject = "New message from $name";  // This will appear in the subject line of the email

    // The body of the email, including the details from the form
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject";  // This includes the message content (subject)

    // Email headers
    $headers = "From: $email\n";  // The "From" field will be the user's email
    $headers .= "Reply-To: $email";  // The "Reply-To" field will also be the user's email
    
    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully.";  // This message will appear if the email is sent
    } else {
        echo "Message could not be sent.";  // This message will appear if sending fails
    }
}
?>