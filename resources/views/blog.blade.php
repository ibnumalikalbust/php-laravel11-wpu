<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="shortcut icon" href="img/laravel.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>ABOUT</h1>
    </header>
    <main>
        <?php foreach ($articles as $article) : ?>
            <h2>{{ $article['title'] }}</h2>
            <p>{{ $article['paragraph1'] }}</p>
            <p>{{ $article['paragraph2'] }}</p>
        <?php endforeach; ?>
    </main>
    <script src="js/script.js"></script>
</body>
</html>