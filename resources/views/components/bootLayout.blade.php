<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bonus</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUa9iqX+7aR8oEiTLsRq5r5+5MDtkKc2xkqXcKMxD6YkDPhLJnp6EY9haZw9" crossorigin="anonymous">
</head>

<body>
    <div class="container>
        {{ $slot }}
    </div>

    <!-- Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pQdfxqjtWnLYC+ylAYycLMmNKhV7ZxkaP80DgtpzCSHpH0Az7MUcSsK6sAdPZzJz" crossorigin="anonymous">
    </script>
</body>

</html>
