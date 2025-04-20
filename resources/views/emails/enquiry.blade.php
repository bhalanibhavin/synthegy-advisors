<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Enquiry</title>
</head>
<body>
    <h2>New enquiry for {{ $data['enquiry_service_type'] }}</h2>

    <p><strong>Name:</strong> {{ $data['enquiry_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['enquiry_email'] }}</p>
    <p><strong>Service:</strong> {{ $data['enquiry_service_type'] }}</p>

    <p>Regards,<br>{{ $data['enquiry_name'] }}</p>
</body>
</html>
