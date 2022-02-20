
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

    <title>Php Random</title>
</head>
<body>

<header>
    <?php require_once "navbar.php"?>
</header

<section class="container">
    <div class="container text-center">
<?php

//Recup de l'entrée du joueur
if(isset($_POST['answerInput'])){
    $answerInput = $_POST['answerInput'];
}
//Récup de la reponse input type hiden
if(isset($_POST['reponse'])){
    $reponse = $_POST['reponse'];
}
//Condition du message si bonne ou mauvaise réponse
if($answerInput == $reponse){
    echo "<p class='mt-5 alert alert-success'>Bonne réponse !</p>";
}else{
    echo "<p class='mt-5 alert alert-danger'>Mauvaise réponse !</p>";
}
?>
<hr>
        <div class="text-center">
            <a href="home.php" class="mt-3 btn btn-outline-danger">Retour</a>
        </div>
<hr>
    </div>
</section>
</body>
</html>