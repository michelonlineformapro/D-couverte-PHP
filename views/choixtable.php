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

    <title>Php CHOIX TABLE</title>
</head>
<body>

<header>
    <?php require_once "navbar.php"?>
</header
<section class="container">
<div class="container text-center">

<h4 class="text-info">Votre résultat :</h4>
<?php
if(isset($_POST['multiple'])){
    //Récup de la variable choix ru multiplicateur -> liste déroulante de 1 à 10
    $multiple = $_POST['multiple'];
    //Boucle de lecture 1 à 10 à multiplié par le multiplicateur
    for ($i = 0; $i < 11; $i++) {
        $resultat = $i * $multiple;
        echo "<ul class='list-group text-center'>
                <li class='list-group-item text-success'> $i x $multiple = $resultat</li>            
             </ul>";
    }
}
?>
    <div class="text-center">
        <a href="home.php" class="mt-3 btn btn-outline-danger">Retour</a>
    </div>

</div>
</section>
</body>
</html>
