<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Genre</h1>
        <ul>
            @foreach($genres as $genre)
                <li>{{ $genre['id'] }} - {{ $genre['name'] }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
