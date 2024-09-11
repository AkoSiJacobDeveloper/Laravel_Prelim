<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('home') }}">Home</a>
        <a class="navbar-brand" href="{{ url('/') }}">Items</a>
        <a class="navbar-brand" href="{{ url('pics') }}">Pictures</a>
    </nav>
    <main>
        <h1>Items</h1>
        <div class="d-flex flex">
            <img src="https://static.wikia.nocookie.net/naruto/images/5/57/Naruto_Uzumaki.png/revision/latest?cb=20160725110003" alt="Naruto" style="width: 300px; height: auto;">
            <img src="https://static.wikia.nocookie.net/naruto/images/2/21/Sasuke_Part_1.png/revision/latest?cb=20170716092103" alt="Sasuke" style="width: 300px; height: auto;">
            <img src="https://static.wikia.nocookie.net/naruto-onepiece-fairytail/images/2/2a/Sakura_Haruno.png/revision/latest?cb=20161215200650" alt="Sakura" style="width: 300px; height: auto;">
    </main>
</body>
</html>
