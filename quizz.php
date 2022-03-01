<?php
//On demarre la session de utilisateur
session_start();
//tableau associatif multi dimension
$question1 = array(
    array("question" => "Quelle est la couleur du logo PHP ?",
        "reponses1" => "Vert",
        "reponses2" => "Bleu",
        "reponses3" => "Rouge",
        "reponses4" => "Jaune",
    )
);
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
<div class="container-fluid center-container-quizz">
    <?php
    //Boucle de parcour du tableau de question - reponse +  alias pour acceder au valeur
    foreach ($question1 as $value) {
        ?>
        <h2 id="question" class="text-center text-warning"><?= $value['question'] ?></h2>
        <p class="alert alert-success text-center">Question : 1 / 5 </p>
        <div id="row" class="row">
            <!--form + methode post sans action="" la validation est effectuée par le bouton VALIDER en bas de page-->
            <form method="post">
                <!--Chaque btn radio a le meme name pour eviter les reponse multiple-->
                <div class="col-md-6 col-sm-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reponses" id="reponse1" value="<?= $value['reponses1'] ?>"/>
                        <label class="form-check-label" for="reponses1">
                            <?= $value['reponses1']; ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reponses" id="reponse2" value="<?= $value['reponses2'] ?>">
                        <label class="form-check-label" for="reponses2">
                            <?= $value['reponses2']; ?>
                        </label>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reponses" id="reponse3" value="<?= $value['reponses3'] ?>">
                        <label class="form-check-label" for="reponses3">
                            <?= $value['reponses3']; ?>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reponses" id="reponse4" value="<?= $value['reponses4'] ?>">
                        <label class="form-check-label" for="reponses4">
                            <?= $value['reponses4']; ?>
                        </label>
                    </div>
                </div>
                <!--Ce bouton est recupérér a l'aide de son attribut name="" et $_POST['btn-valide-1']-->
                <button name="btn-valide-1" id="btn-valide" class="btn btn-primary mt-3">VALIDER</button>

            </form>
        </div>
        <?php
        //Au clic sur le bouton valider ligne 76 name='btn-valide-1'
        if(isset($_POST['btn-valide-1'])){
            //Pour la question 1 on reinitialise le score
            $_SESSION['score'] = 0;
            //Si un bouton radio est coché
            if(isset($_POST['reponses'])){
                //On stock dans une variable
                $reponse = $_POST['reponses'];
                //var_dump($reponse);
                //Si la reponse du joueur est egale a la reponse 2 du tableau (clé)
                if($reponse === $value['reponses2']){
                    //On affiche la bonne reponse
                    echo "<p class='alert alert-success text-center mt-3'>BONNE REPONSE = " .$value['reponses2']."</p>";
                    //On stocke le score incrementé en session
                    $_SESSION['score'] += 1;
                    //On affiche le score sur 5
                    echo "<p class='mt-3 alert alert-warning'>SCORE = " . $_SESSION['score']." / 5 </p>";
                    //On fait un lien a la question suivante
                    echo "<a href='quizz2.php' class='btn btn-success mt-3'>Question suivante</a>";
                    //On cache le bouton + la question et tous les bouton radio + label
                    ?>
                     <style>
                    #btn-valide{
                        display: none;
                    }
                    #question{
                        display: none;
                    }
                    #row{
                        display: none;
                    }
                </style>
                <?php
                }else{
                    //Si erreur on affiche erreur + la bonne reponse
                    echo "<p class='alert alert-danger text-center mt-3'>ERREUR : BONNE REPONSE = " .$value['reponses2']."</p>";
                    //le score
                    echo "<p class='mt-3 alert alert-warning'>SCORE = " . $_SESSION['score']." / 5</p>";
                    //On ajoute aucun point
                    $_SESSION['score'] += 0;
                    //Le bouton pour la question suivante
                    echo "<a href='quizz2.php' class='btn btn-outline-dark mt-3'>Question suivante</a>";
                    //On cache le bouton + la question et tous les bouton radio + label
                    ?>
                    <style>
                        #btn-valide{
                            display: none;
                        }
                        #question{
                            display: none;
                        }
                        #row{
                            display: none;
                        }
                    </style>
                    <?php
                }

                //var_dump($_POST['reponses1']);
                //var_dump($_POST['reponses2']);
                //var_dump($_POST['reponses3']);
                //var_dump($_POST['reponses4']);
                //var_dump($_SESSION['score']);
            }else{
                echo "<p class='mt-3'>MERCI DE VALIDER VOTRE REPONSE</p>";
            }
        }
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>


