<?php
session_start();
$question1 = array(
    array("question" => "Php est langage ?",
        "reponses1" => "Serveur - Client",
        "reponses2" => "Client - Client",
        "reponses3" => "Client - Serveur",
        "reponses4" => "Je ne vais pas au restaurant",
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
    foreach ($question1 as $value) {
        ?>
        <h2 id="question" class="text-center text-warning"><?= $value['question'] ?></h2>
        <p class="alert alert-success text-center">Question : 3 / 5 </p>
        <div id="row" class="row">
            <form method="post">

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

                <button name="btn-valide-1" id="btn-valide" class="btn btn-primary mt-3">VALIDER</button>

            </form>
        </div>
        <?php
        if(isset($_POST['btn-valide-1'])){

            if(isset($_POST['reponses'])){
                $reponse = $_POST['reponses'];
                //var_dump($reponse);
                if($reponse === $value['reponses3']){
                    echo "<p class='alert alert-success text-center mt-3'>BONNE REPONSE = " .$value['reponses3']."</p>";
                    $_SESSION['score'] += 1;
                    echo "<p class='mt-3 alert alert-warning'>SCORE = " . $_SESSION['score']." / 5 </p>";
                    echo "<a href='quizz4.php' class='btn btn-success mt-3'>Question suivante</a>";

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
                    echo "<p class='alert alert-danger text-center mt-3'>ERREUR : BONNE REPONSE = " .$value['reponses3']."</p>";
                    echo "<p class='mt-3 alert alert-warning'>SCORE = " . $_SESSION['score']." / 5</p>";
                    $_SESSION['score'] += 0;
                    echo "<a href='quizz4.php' class='btn btn-outline-dark mt-3'>Question suivante</a>";

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
