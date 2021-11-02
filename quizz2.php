<?php
session_start();
$question1 = array(
    array("question" => "Quelle fonction php permet de debug le code ?",
        "reponses1" => "var_dump()",
        "reponses2" => "console.log()",
        "reponses3" => "echo.debug()",
        "reponses4" => "debug.log()",
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

    <title>Quizz PHP</title>
</head>
<body>
<div class="container-fluid center-container-quizz">
    <?php
    var_dump($_SESSION['score']);

    foreach ($question1 as $value) {
        ?>
        <h2 id="question" class="text-center text-warning"><?= $value['question'] ?></h2>
        <p id="score" class="alert alert-success text-center">Votre score <?= $_SESSION['score'] ?> / 5 </p>
        <div id="row" class="row">
            <form method="post">

                <div class="col-md-6 col-sm-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reponses1" id="reponse1">
                        <label class="form-check-label" for="reponses1">
                            <?= $value['reponses1']; ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reponses2" id="reponse2">
                        <label class="form-check-label" for="reponses2">
                            <?= $value['reponses2']; ?>
                        </label>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reponses3" id="reponse3">
                        <label class="form-check-label" for="reponses3">
                            <?= $value['reponses3']; ?>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reponses4" id="reponse4">
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

            if(isset($_POST['reponses1'])){
                echo "<p class='alert alert-success text-center mt-3'>BONNE REPONSE</p>";
                echo "<a href='quizz3.php' class='btn btn-success mt-3'>Question suivante</a>";
                $_SESSION['score'] += 1;
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
                    #score{
                        display: none;
                    }
                </style>
                <?php
            }else{
                echo "<p class='alert alert-danger text-center mt-3'>MAUVAISE REPONSE</p>";
                echo "<a href='quizz3.php' class='btn btn-danger mt-3'>Question suivante</a>";
                $_SESSION['score']  += 0;
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
                    #score{
                        display: none;
                    }
                </style>
                <?php
            }


            //var_dump($_POST['reponses1']);
            //var_dump($_POST['reponses2']);
            //var_dump($_POST['reponses3']);
            //var_dump($_POST['reponses4']);
            var_dump($_SESSION['score']);
        }else{
            echo "<p class='mt-3'>MERCI DE VALIDER VOTRE REPONSE</p>";
        }
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>


