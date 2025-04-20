<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact US</title>
</head>
<body>
    <h2>New contact-us for {{ $data['contact_us_service_type'] }}</h2>

    <p><strong>Name:</strong> {{ $data['contact_us_name'] }}</p>
    <p><strong>Company:</strong> {{ $data['contact_us_company'] }}</p>
    <p><strong>Email:</strong> {{ $data['contact_us_email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['contact_us_phone'] }}</p>
    <p><strong>Service:</strong> {{ $data['contact_us_service_type'] }}</p>
    <p><strong>Message:</strong> {{ $data['contact_us_message'] }}</p>

    <p>Regards,<br>{{ $data['contact_us_name'] }}</p>
</body>
</html>
