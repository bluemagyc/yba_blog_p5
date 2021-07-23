<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles.css" />

    <title><?= $title ?></title>
</head>
<body>

<div id="global">
<header>
    <h1 id="blogTitle"><?= $title ?></h1>
</header>
    <div class="content"><?= $content ?></div>

    <footer id="footer">
Blog réalisé avec PHP, HTML 5 et CSS.

    </footer>
</div>
</body>
</html>