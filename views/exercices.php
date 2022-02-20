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
        <h1 class="title is-1">Afficher une variable:</h1>
        <?php
        $prenom = "Michael";
        echo "Afficher la variable $ prenom : " .$prenom ?>
    </div>

    <div class="notification is-danger">
        <h1 class="title is-1">Afficher deux variables avec la concaténation:</h1>
        <?php
        $prenom = "Michael";
        $nom = "MICHEL";
        echo "Afficher la variable $ prenom : " .$prenom. " et $ nom : " .$nom ?>
    </div>

    <div class="notification is-info">
        <h1 class="title is-1">Réalisé une opération (+ - * /) sur 2 variables:</h1>
        <?php
        $nombre1 = 250;
        $nombre2 = 35;
        $resulat = $nombre1 * $nombre2;
        echo "Afficher la vairable $ nombre1 : " .$nombre1. " et $ nombre2 : " .$nombre1. " et son produit = " .$resulat ?>
    </div>

    <div class="notification is-secondary">
        <h1 class="title is-1">Réalisé une condition if - else if - else </h1>
        <?php
        $age = 19;
        if($age < 18){
            echo "Tu as " .$age. " ans : donc tu es mineur !";
        }elseif ($age >= 18){
            echo "Tu as $ age = " .$age. " ans : donc tu es majeur !";
        }else{
            echo "Je ne connais pas ton age";
        }
        ?>
    </div>

    <div class="notification is-primary">
        <h1 class="title is-1">Réalisé une condition multiple avec if - else if - else et AND && et OU ||  </h1>
        <?php
        $age = 16;
        $homme = false;
        if($age < 18 && $homme){
            echo "Tu as " .$age. " ans : donc tu es mineur et tu es un homme !";
        }elseif ($age >= 18 && $homme){
            echo "Tu as $ age = " .$age. " ans : donc tu es majeur !";
        }elseif ($age < 18 && !$homme){
            echo "Tu as " .$age. " ans : donc tu es mineur et tu es une femme !";
        }else{
            echo "Tu as " .$age. " ans : donc tu es majeur et tu es une femme !";
        }
        ?>
    </div>

    <div class="notification is-danger">
        <h1 class="title is-1">Réaliser un switch case avec une note d'examens sur 5</h1>
        <?php
        $note = 4;
        switch ($note){

            case 0:
                echo "0/5 c trés mauvais car ta note $ note = " .$note;
                break;
            case 1:
                echo "1/5 c mauvais car ta note $ note = " .$note;
                break;
            case 2:
                echo "2/5 c presque la moyenne car ta note $ note = " .$note;
                break;
            case 3:
                echo "3/5 c au dessus de la moyenne car ta note $ note = " .$note;
                break;
            case 4:
                echo "4/5 c bien car ta note $ note = " .$note;
                break;
            case 5:
                echo "5/5 c trés bien car ta note $ note = " .$note;
                break;
            default:
                echo "Je ne connais pas ta note car ta note $ note = " .$note;
        }
        ?>
    </div>

    <div class="notification is-warning">
        <h1 class="title is-1">Réalisé une boucle while tant que</h1>
        <?php
        $ligne= 0;
        while ($ligne <= 10){
            echo "On incrémente le nombre de ligne de 0 à 10, rappel pour incrémenté on utilise la variable ++, c'est à dire $ ligne++; ou $ ligne += 1<br>";
            $ligne++;
        }
        ?>
    </div>

    <div class="notification is-success">
        <h1 class="title is-1">Réalisé une boucle for avec ses 3 paramètres</h1>
        <?php
        $ligne= 0;
        for($ligne = 0; $ligne <= 10; $ligne++){
            echo "Répète cette phrase : " .$ligne. "<br>";
        }

        ?>
    </div>

    <div class="notification is-info">
        <h1 class="title is-1">Créer un tableau simple avec 4 éléments et afficher ses valeurs</h1>
        <p>ATTENTION: L'index d'un tableau commence par 0</p>
        <?php
        $tableau = array("Livre1", "Tintin", "Picsou", "etc...");
        echo "Element 1 = ". $tableau[0]. "<br> Element 2 = " .$tableau[1]. "<br> Element 3 = " .$tableau[2]. "<br> Element 4 = ".$tableau[3];
        ?>
    </div>

    <div class="notification is-secondary">
        <h1 class="title is-1">Créer un tableau associatif aves ses elements clés => valeurs</h1>
        <p>ATTENTION: L'index d'un tableau commence par 0</p>
        <?php
        $tableau = array(
            "titre" => "Star wars",
            "realisateur" => "George Lucas",
            "annee" => 1977
        );
        echo "Le film c'est : " .$tableau['titre']. " le réalisateur c'est : " .$tableau['realisateur']. " et l'année de sortie : " .$tableau['annee'];
        ?>
    </div>

    <div class="notification is-primary">
        <h1 class="title is-1">Utilisé une fonction native de PHP (ici date)</h1>
        <?php
        $jour = date("d-m-Y");
        $heure = date("H:i:s");
        date_default_timezone_set('UTC');
        echo "Bonjour ! Nous somme le : " .$jour.  " et il est : " .$heure;

        ?>
    </div>

    <div class="notification is-warning">
        <h1 class="title is-1">Écrire une fonction avec des paramètres</h1>
        <?php

        function addition($nbr1,$nbr2){
            $res = $nbr1 + $nbr2;
            return $res;
        }

        echo "Ici $ nbr1 = 4 et $ nbr2 = 5 et la fonction addition = " .addition(4, 5);
        ?>
    </div>

    <div class="notification is-warning">
        <h1 class="title is-1">Inclure une portion de page dans cette page</h1>
        <?php
        require "portion.php";
        ?>
    </div>

    <div class="notification is-secondary">
        <h1 class="title is-1">Passer des données dans URL</h1>
        <a class="button is-success" href="exercices.php?nom=ALAIN&amp;prenom=DELON">Des données dans URL</a>
    </div>

    <div class="notification is-danger">
        <h1 class="title is-1">Utilisé des variables super globales $_POST['']</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Nom: <input class="input" type="text" name="fname">
            <br><br>
            <button class="button is-info"  type="submit">Envoyer</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Ton nom est vide";
            } else {
                echo "TON PRENOM EST : "  .$name;
                var_dump($name);
            }
        }
        ?>
    </div>




</div>
</body>
</html>
