<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Author</h1>
        <ul>
            @foreach($authors as $author)
                <li>{{ $author['id'] }} - {{ $author['name'] }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
