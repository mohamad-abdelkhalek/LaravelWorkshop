<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email</title>
</head>

<body>
    <h1>Welcome to our application</h1>
    <p>Dear {{ $name }}</p>
    <p>Thank you for reaching our site</p>
    <p>Best Regards</p>
    <p>{{ env('APP_NAME') }} Team</p>
</body>

</html>
