<?php
header('Content-Type: text/plain; charset=utf-8');

$to = 'basavakhbm@gmail.com';

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$organization = trim($_POST['organization'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    exit('Please fill in your name, email and message.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Please enter a valid email address.');
}

$subject = 'Aashar Technologies Website Enquiry - ' . ($service ?: 'General');
$body = "Name: $name\nEmail: $email\nPhone: $phone\nOrganization: $organization\nService: $service\n\nMessage:\n$message\n";
$headers = "From: Aashar Technologies Website <basavakhbm@gmail.com>\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you. Your enquiry has been submitted successfully.';
} else {
    http_response_code(500);
    echo 'We could not send the enquiry right now. Please email basavakhbm@gmail.com or call 7892992154.';
}
?>