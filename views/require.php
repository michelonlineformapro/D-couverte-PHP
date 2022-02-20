<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <title>Php HOME</title>
</head>
<body>
<header>
    <?php require_once "navbar.php"?>
</header>
<div class="container">
    <div class="notification is-warning">
        <h1 class="title is-1">LES INCLUDES, REQUIRE et REQUIRE_ONCE :</h1>
    </div>
    <h3 class="title is-3">Eviter les répétition (DRY Dont repeat Yourself)</h3>
    <p>
        En PHP, nous pouvons facilement insérer d'autres pages (on peut aussi insérer seulement des morceaux de pages)
        à l'intérieur d'une page.</p>

        <p>Le principe de fonctionnement des inclusions en PHP est plutôt simple à comprendre. Vous avez un site web composé de, disons, vingt pages. Sur chaque page, il y a un menu,
        toujours le même. Pourquoi ne pas écrire ce menu (et seulement lui) une seule fois dans une page menus.php  ?
    </p>
    <hr>
    <p><b>include :</b> inclus une portion de page, si elle n'existe pas le site va l'ignoré.</p>
    <p><b>require :</b> inclus une portion de page, si elle n'est pas trouvé le site retourne une erreur 404.</p>
    <p><b>require_once :</b> inclus une portion de page une seule fois, si elle n'est pas trouvé le site retourne une erreur 404.</p>
    <hr>
    <p>Dans un site on utlise une navbar commune à toutes les pages</p>
    <br>
    <ul>
        <li>1 - On créer un fichier .php : ex: menu.php</li>
        <li>2 - Cette page va contenir le code HTML de la barre de navigation.</li>
        <li>3 - Dans chaque page, on va utilisé :</li>
        <p>require_once "views/navbar.php";</p>
    </ul>


    <hr>
    <a class="button is-success" href="getpost.php">Des données dans URL</a>
    <hr>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<!-- Mise en place du burger button responsive -->
<script>
    /*DU JQUERY
    Récuprération de la classe .navbar-burger
    Appel de la fonction jQuery click -> qui appel une fonction
    On récupère l'identifiant navbarMenuHeroA et la classe navbarBurger
    La methode toogleClass jQuery va faire switcher la classe d'un element a l'autre
    C un boolean qui retourne True Ou False
    */
    $('.navbar-burger').click(function() {
        $('#navbarMenuHeroA, .navbar-burger').toggleClass('is-active');
    });
</script>
</body>
</html>

