{{-- resources/views/emails/contact_form.blade.php --}}
<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
</head>

<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>

</html>