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
        <h1 class="title is-1">LES VARIABLES :</h1>
    </div>
    <p>
        Une variable, c'est une petite information stockée en mémoire temporairement.
        Elle n'a pas une grande durée de vie. En PHP,
        la variable (l'information) existe tant que la page est en cours de génération.
        Dès que la page PHP est générée, toutes les variables sont supprimées de la mémoire
        car elles ne servent plus à rien. Ce n'est donc pas un fichier qui reste stocké sur le disque dur,
        mais une petite information temporaire présente en mémoire vive.
    </p>

    <p>Une variable en PHP commence par le symbole $ entre deux balise PHP</p>
    <ul>
        <br>
        Elles sont de différent types :
        <br>
        <li>String = chaine de caractères : $age = "Du texte";</li>
        <li>Integer = chiffre ou nombre entier : $age = 1; ou $age = 25; (et entier relatif $longitude = -15;)</li>
        <li>Float = chiffre ou nombre à virgules : $pi = 3.14</li>
        <li>Booléens = Valeur qui permet de stocker soit vrai soit faux. Cela permet de retenir si une information est vraie ou fausse : $estMajeur = true;</li>
        <li>Rien (null) = Parfois on a besoin de déclaré des variables nuls (absence de typage) : $pasDeValeu = null;</li>
    </ul>

    <br>
    <p>Résumé : une variable PHP = $ + nom (type) = valeur + ;</p>
    <p>On a donc un système de type clé/valeur</p>

    <hr>
    <h3 class="title is-3">Afficher des varaiables</h3>
    <p>C'est trés simple</p>
    <p>$prenom = "Michael";</p>
    <p>echo $prenom;</p>
    <hr>
    <h3 class="title is-3">La concaténation</h3>
    <p>Il faut écrire la variable en dehors des guillemets et séparer les éléments les uns des autres à l'aide d'un point</p>
    <p>Cette methode permet de mélanger des variable PHP et de l'HTML.</p>
    <p>$prenom = "michael";</p>
    <p>$age = 152;</p>
    <p>echo 'Bonjour' . $prenom .' tu as : ' . $age . ' ans. ';</p>
    <hr>
    <h3 class="title is-3">Les opréartions (+ - * /)</h3>
    <p>On peut réalisé des opérations sur les varaiables</p>
    <p>$addition = 4 + 3;</p>
    <p>$a = 10;</p>
    <p>$b = 15;</p>
    <p>$c = $a + $b;</p>
    <p>echo $c;</p>

    <hr>
    <h3 class="title is-3">Les conditions: if else elseif switch</h3>
    <h4 class="title is-4">Les opérateurs (== != > < >= <= )</h4>
    <p>La structure est la suivante :</p>
    <p>Si la condition est juste = on affiche un résultat SINON autres résultats :</p>
    <p>if( condition ){ résultat } else { résultat }</p>
    <p>$age = 18;</p>
    <p>if($age >= 18){ </p>
    <p>echo "Vous êtes majeur";</p>
    <p>}else{</p>
    <p>echo "Vous êtes mineur";</p>
    <p>}</p>
    <p>La structure peut être plus complexe à l'aide de if elseif else </p>
    <hr>
    <p>La condition peut prendre tous type de varaiable :</p>
    <p>$peutEntrer = true;</p>
    <p>if($peutEnter == true){ echo "Fait ceci";} else {echo "Fait cela";}</p>
    <p>Un booléen peut prendre la valeur false comme ceci :</p>
    <p>if(!$peutEntrer) = à if($peutEnter == false)</p>
    <hr>
    <h3 class="title is-3">Des conditions multiples</h3>
    <h4 class="title is-4">Les mot clés</h4>
    <p>Et (AND) = && (deux esperluettes)</p>
    <p>Ou (OR) = || (Alt Gr + 6)</p>
    <p>Exemple :</p>
    <p>if($age > 18 && $nom == "Marc"){ résultat }</p>
    <hr>
    <h3 class="title is-3">Le Swtich Case</h3>
    <p>Pour évité des cas de condition trop longue, uutilse le switch case</p>
    <p>Une variable $age = 3;</p>
    <p>La structute :</p>
    <p>switch(condition){ les différents cas }</p>
    <p>Exemple :</p>
    <p>switch($age){</p>
    <p>case 1:</p>
    <p>echo "Ceci s'affiche si $age = 0"; sinon</p>
    <p>break; Ici si le cas 1 n'est pas valide on stop la consition</p>
    <p>Si $age = null</p>
    <p>On utilise le cas par defaut</p>
    <p>default: echo "Ceci s'affiche si aucun cas ne correspond";</p>
    <img src="../assets/img/switch.png">
    <hr>
    <h3 class="title is-3">Les cas if else et le ternaire</h3>
    <p>Un version racourcie d'un if else est possible :</p>
    <p>$majeur = ($age >= 18) ? true : false;</p>
    <br>
    <a class="button is-warning" href="boucles.php">Les boucles</a>
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
