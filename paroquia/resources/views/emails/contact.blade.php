<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p>You have received a new message from the contact form:</p>
    <ul>
        <li><strong>Name:</strong> {{ $data['fromName'] }}</li>
        <li><strong>Email:</strong> {{ $data['fromEmail'] }}</li>
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
    </ul>
</body>
</html>
