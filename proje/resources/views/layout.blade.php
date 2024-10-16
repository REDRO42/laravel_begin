<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            text-align: center;
            margin: 10px 0;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
        }
        main {
            text-align: center;
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Hakkımızda</h1>
</header>

<nav>
    <a href="/index">ANASAYFA</a>
    <a href="/about">HAKKIMIZDA</a>
    <a href="/contact">İLETİŞİM</a>
</nav>

<main>
    @yield('main')
</main>

<footer>
    <p>&copy; 2024 My Simple Website</p>
</footer>

</body>
</html>
