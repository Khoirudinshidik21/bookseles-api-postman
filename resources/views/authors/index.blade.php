<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; }
        h1 { margin-bottom: 20px; }
        table { border-collapse: collapse; width: 50%; margin: 0 auto; }
        th, td { border: 1px solid #aaa; padding: 8px 16px; text-align: left; }
        th { background: #007bff; color: #fff; }
        tr:nth-child(even) { background: #f2f2f2; }
    </style>
</head>
<body>
    <h1 align="center">Daftar Author</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Author</th>
        </tr>
        @foreach ($authors as $i => $author)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $author->name }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
