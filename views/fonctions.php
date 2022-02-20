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
    <div class="notification is-primary">
        <h1 class="title is-1">LES FONCTIONS :</h1>
    </div>
    <p>
        Une fonction est une série d'instructions qui effectue des actions et qui retourne une valeur.</p>
        <p>En général, dès que vous avez besoin d'effectuer des opérations un peu longues dont vous aurez à nouveau
            besoin plus tard, il est conseillé de vérifier s'il n'existe pas déjà une fonction qui fait cela pour vous.</p>
        <p>Et si la fonction n'existe pas, vous avez la possibilité de la créer.</p>
    <h4 class="title is-4">Les fonctions native PHP</h4>
    <p>strlen : longueur d'une chaine</p>
    <p>str_replace: rechercher et remplacer</p>
    <p>str_shuffle : réalise un mélange</p>
    <p>strtolower : ecrire en minuscule</p>
    <p>LES DATES</p>
    <p>Les dates sont au format H = heures, i = minutes, d = jour, m = mois, Y = année </p>
    <p>Exemple : $jour = date("d");</p>
    <hr>
    <p>Les fonctions : function MaFonction(){}</p>
    <p>Exemple</p>
    <p>$nom = "TRUMP";</p>
    <p>function DireBonjour($nom){</p>
    <p>echo "Bonjour Donald " .$nom;</p>
    <p>}</p>

    <p>On utlise la fonction comme ceci : DireBonjour("prenom"); </p>
    <h4 class="title is-4">Une fonctions et des paramètres</h4>
    <p>function CalculCarre($valeur1, $valeur2){</p>
    <p>$resultat = $valeur1 * $valeur2;</p>
    <p>return $resultat;</p>
    <p>}</p>
    <p>Pour utilisé la fonction : CalculCarre(5,5);</p>
    <p>echo "Résultat de l'opération = " .$resultat;</p>
    <hr>
    <a class="button is-warning" href="require.php">Des portions de pages</a>
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

