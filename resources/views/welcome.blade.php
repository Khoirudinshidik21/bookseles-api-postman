<!DOCTYPE html>
<html>
<head>
    <title>Beranda App Buku</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .homepage-nav {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 60px;
        }
        .nav-card {
            background: rgba(255,255,255,0.6);
            padding: 28px 44px;
            border-radius: 16px;
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            color: #1877f2;
            box-shadow: 0 6px 24px rgba(30,50,180,0.05);
            cursor: pointer;
            transition: background 0.25s;
        }
        .nav-card:hover {
            background: #f0f5fa;
            color: #144272;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container" style="max-width:700px;">
        <h1>Selamat Datang di Sistem Buku</h1>
        <div class="homepage-nav">
            <a href="/genres" class="nav-card">List Genre</a>
            <a href="/authors" class="nav-card">List Author</a>
        </div>
    </div>
</body>
</html>
