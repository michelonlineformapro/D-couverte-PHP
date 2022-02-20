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
</header
<section class="container">


<div class="container">
    <h1 class="text-center text-info">DÉCOUVERTE PHP</h1>
    <h2 class="text-danger">Les outils</h2>
    <ul class="list-group">
        <li class="list-group-item">Installer wampServer et le lancer</li>
        <li class="list-group-item">Comprendre l'instalation de Php (console et variables d'environment windows 10)</li>
        <li class="list-group-item">Comprendre le rôle d'Apache</li>
        <li class="list-group-item">Comprendre MySQL et PhpMyAdmin</li>
        <li class="list-group-item">Installer et utiliser un IDE avec un environment PHP</li>
    </ul>

    <div>
        <hr>
        <h3 class="text-danger">Afficher le table de 3</h3>
        <a href="table3.php" class="btn btn-outline-info">Afficher la table de 3</a>
        <hr>

        <h3 class="text-warning">Selection du multiple</h3>
        <form method="post" action="choixtable.php">

            <div class="form-group">
                <label for="multiple">Choix du multiplicateur</label>
                <select class="form-control" id="multiple" name="multiple">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <button type="submit" class="mt-3 btn btn-outline-success">Résultat</button>
        </form>
        <hr>
    </div>

    <div>
        <h3 class="text-warning">Afficher avec des boutons radio</h3>
        <h4 class="text-info">Choix du multiple</h4>
        <form action="checkbox.php" method="post">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="2">
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="3">
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="4">
                <label class="form-check-label" for="inlineRadio1">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="5">
                <label class="form-check-label" for="inlineRadio2">5</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="6">
                <label class="form-check-label" for="inlineRadio3">6</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="7">
                <label class="form-check-label" for="inlineRadio1">7</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="8">
                <label class="form-check-label" for="inlineRadio2">8</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="9">
                <label class="form-check-label" for="inlineRadio3">9</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="10">
                <label class="form-check-label" for="inlineRadio3">10</label>
            </div>
            <button type="submit" class="btn btn-outline-danger">Voir les résultats</button>

        </form>
    </div>

    <h3 class="text-danger">Une multiplication au hasard</h3>
    <form action="random.php" method="post">
        <div class="form-group">
            <div class="form-group">
                <label for="reponse">Votre question :
                    <?php
                    $nombre = array(1,2,3,4,5,6,7,8,9,10);
                    $multiple = array(1,2,3,4,5,6,7,8,9,10);
                    $rand_nbr = array_rand($nombre);
                    $rand_multi = array_rand($multiple);
                    $answer = $rand_nbr * $rand_multi;

                    echo $rand_nbr . ' X ' . $rand_multi. ' = ';
                    ?>
                </label>

                <input type="hidden" name="reponse" id="reponse" value="<?= $answer ?>">
                <br>
            </div>
            <div class="form-group">
                <label for="answerInput">Votre réponse</label>
                <input type="text" class="form-control" name="answerInput" id="answerInput"/>
            </div>
            <hr>

            <button type="submit" name="btn-result" class="btn btn-outline-success">Valider</button>
            <hr>
        </div>
    </form>
</div>
</section>

</body>

</html>







