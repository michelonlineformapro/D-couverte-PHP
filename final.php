<?php
session_start();
$score = $_SESSION['score'];
?>
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

    <title>Quizz PHP</title>
</head>
<body>
<header>
    <?php require_once "menu.php"?>
</header>
<div class="container-fluid center-container">
    <h1 class="text-danger text-center">RESULTAT DU QUIZZ !</h1>
    <div class="text-center">
        <p class="alert alert-warning"><?= $_SESSION['score'] ?> / 5</p>
        <p><?= $score ?></p>

    </div>
    <?php


    //Switch case en fonction du score
    switch ($score){
        case 0:
            echo "<p class='alert alert-danger'>Vous êtes mauvais</p>";
            break;
        case 1:
            echo "<p class='alert alert-danger'>C'est pas terrible</p>";
            break;
        case 2:
            echo "<p class='alert alert-warning'>Vous pouvez faire mieux</p>";
            break;
        case 3:
            echo "<p class='alert alert-warning'>Bien vous êtes au dessus de la moyenne</p>";
            break;
        case 4:
            echo "<p class='alert alert-success'>Score parfait</p>";
            break;
        case 5:
            echo "<p class='alert alert-success'>5/5 top du top</p>";
    }

    ?>
    <a href="index.php" class="btn btn-danger mt-3">RECOMMENCER</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>


<?php
