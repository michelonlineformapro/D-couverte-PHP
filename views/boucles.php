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
        <h1 class="title is-1">LES BOUCLES :</h1>
    </div>
    <h3 class="title is-3">Les boucles simples Tant Que :</h3>
    <p>Les instructions sont répétées tant que la conditions est vraie</p>
    <p>Exemple :</p>
    <p>$ligne = 1;</p>
    <p>while($ligne <= 100){</p>
    <p>echo "On incrémente le nombre de ligne de 1 à 100, rappel pour incrémenté on utilise la variable ++, c'est à dire $ligne++; ou $ligne += 1;</p>
    <p>$ligne++;</p>
    <p>}</p>
    <p>Une fois à 100 : la boucle s'arrète.</p>
    <hr>
    <h3 class="title is-3">Les boucles for :</h3>
    <p>C'est une forme condensée des boucles</p>
    <p style="color: green">for(Initialiser; condition; incrementation){ résultat }</p>
    <p>Exemple :</p>
    <p>for($repetition = 0; $repetition <= 100; $repetion++){</p>
    <p>echo "On va ecrire cette phrase : " .$repetiton. " fois !"; </p>
    <hr>
    <a class="button is-success" href="tableaux.php">Les tableaux</a>
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
