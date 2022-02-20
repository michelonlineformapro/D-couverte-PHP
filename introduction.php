<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <title>Php HOME</title>
</head>
<body>
<header>
    <?php require_once "menu.php"?>
</header>

<div class="container">
    <div class="mt-5 alert alert-danger">
        <h1 class="text-success">LES OUTILS :</h1>
    </div>
    <hr>
    <h2 class="text-warning">WampServer : (Serveur Apache + Php + MySQL)</h2>
    <hr>
    <p>Pour créer des sites web dynamiques, nous devons installer des outils qui transformeront notre
        ordinateur en serveur, afin de pouvoir tester notre site.</p>
    <p>Les principaux outils dont nous avons besoin sont :</p>
    <hr>
    <h3 class="text-info">Apache, le serveur web : (local et distant)</h3>
    <hr>
    <p>C'est ce qu'on appelle un serveur web. Il s'agit du plus important de tous les programmes,
        car c'est lui qui est chargé de délivrer les pages web aux visiteurs. Cependant,
        Apache ne gère que les sites web statiques (il ne peut traiter que des pages HTML).
        Il faut donc le compléter avec d'autres programmes.
    </p>
    <hr>
    <h3 class="text-info">PHP, le programme qui permet au serveur web d'exécuter des pages PHP</h3>
    <hr>
    <p>
        C'est un langage de programmation et un plug-in pour Apache qui le rend capable de traiter des pages web dynamiques en PHP. En clair,
        en combinant Apache et PHP, notre ordinateur sera capable de lire des pages web en PHP.
    </p>
    <hr>
    <h3 class="text-info">MySQL, le logiciel de gestion de bases de données.</h3>
    <hr>
    <p>
        C'est le logiciel de gestion de bases de données (SGBDR = Système de gestion de base de données relationnelles) dont je vous ai parlé en introduction. Il permet d'enregistrer des données de manière organisée (comme la liste des membres de votre site).
        Nous n'en aurons pas besoin immédiatement, mais autant l'installer de suite.
    </p>
    <hr>
    <h3 class="text-info">CONCLUSION</h3>

    <p>Bien qu'il soit possible d'installer ces outils séparément,
        il est plus simple pour nous d'installer un paquetage tout prêt :
        MAMP sous Windows et Mac OS X, ou XAMPP sous Linux.</p>

    <p>Il est conseillé d'utiliser un éditeur de texte qui colore le code source,
        comme Sublime Text ou Atom, pour programmer convenablement en PHP.</p>
    <p>Pour les personnes plus expérimentées qui travaillent sur de gros projets,
        je recommande PHPStorm ou Visual Studio Code.</p>


    <hr>
    <a class="btn btn-outline-success" href="views/premierscript.php">Premier script</a>
    <hr>

</div>
