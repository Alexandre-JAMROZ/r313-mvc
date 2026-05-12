<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/public/css/styles.css">
</head>

<body>
    <div id="page">
        <header>
            <nav>
                <a href="/">
                    <img class="nav-logo" src="/public/img/logo.png" width="100">
                </a>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="">Jeux vidéos</a></li>
                    <li><a href="">Sports</a></li>
                    <li><a href="">Informatique</a></li>
                </ul>
                <a href="#contact">Contact</a>
            </nav>
        </header>

        <main>
            <?= $content ?>
        </main>

        <footer>
            <p>&copy; Copyright <?= date("Y") ?> — Alexandre JAMROZ</p>
        </footer>
    </div>
</body>

</html>