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
    <div class="notification is-dark">
        <h1 class="title is-1">LES TABLEAUX :</h1>
    </div>
    <h3 class="title is-3">2 Types : numéroté et associatif :</h3>
    <p>Les tableaux numérotés sont de types clés + valeurs, ils sont initialisé à l'aide du mot clé array()</p>
    <p>Exemple :</p>
    <p>$prenom = array("michael", "bob", "sophie", etc...)</p>
    <p>On récupère les valeurs ainsi</p>
    <p>$prenom[0]; $prenom[1]; etc...</p>
    <p>Ici le premier élément du tableau prend l'index (la clé) 0 (et non 1) qui est égale à "michael".</p>
    <hr>
    <h3 class="title is-3">Les tableaux Associatif :</h3>
    <p>On utilise toujours le mot clé array() mais ici on ^récise la clé et la valeur.</p>
    <p>Exemple : </p>
    <p>$livre = array(</p>
    <p>'titre' => 'Tintin',</p>
    <p>'auteur' => 'Hergé',</p>
    <p>'nbrPage' => 25</p>
    <p>);</p>
    <p>Ensuite pour afficher un résultats :</p>
    <p>echo $livre['auteur'];</p>
    <hr>
    <p>Pour parcourir un tableau, on utlise une boucle for ou foceach</p>
    <p>Avec notre exemple de livre</p>
    <p>for($nombre = 0; $nombre <= nombre d'élément 2 (ici 3 éléments donc index 0, 1, 2); $nombre++){ </p>
    <p>echo "Lecture des éléments : " .$nombre[$livre];</p>
    <p>AVEC FOREACH</p>
    <p>foreach($livre as $nbrLivre){</p>
    <p>echo $nrbLivre;</p>
    <p>On constate que pour lire les données d'un tableau la boucle foreach est beaucoup plus simple.</p>
    <h3 class="title is-3">Vérifier si une clé existe</h3>
    <p>if(array_key_exists('nom', $nomtablau)){</p>
    <p>echo "la clé 'nom' existe dans le tableau";</p>
    <p>} else {</p>
    <p>echo "Cette clé n'existe pas !";</p>
    <p>C'est identique pour une valeur :</p>
    <p>if(in_array("Tintin", $livre){</p>
    <p>echo "Ce livre" . $livre[$titre] . " existe dans le tableau";</p>
    <p>} else {</p>
    <p>echo "Ce livre n'existe pas dans le tableau";</p>

    <p>Pour récupérer la clé d'une valeur <b>array_search</b></p>
    <hr>
    <a class="button is-danger" href="fonctions.php">Les fonctions</a>
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

