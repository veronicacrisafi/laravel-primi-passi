<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer-LARAVEL</title>
</head>

<body>
    <section class="bg-dark">
        <div class="container py-5">
            <div class="d-flex justify-content-between">
                <a href="{{route('home')}}">HomePage</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('contacts')}}">Contacts</a>
            </div>
        </div>
    </section>
</body>

</html>