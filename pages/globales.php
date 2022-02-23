<?php
//Demarre la session
session_start();
//creer un cookie
setcookie("id_cookie_mic", 'azerty');
//nom + valeur + date expiration (timestamp) 24h = 3600 seconde * 24
//chemin de stock(ici la racine + sous domaine (tous les repertoires) /) + nom de domaine +
// secutité https, http obligatoire
setcookie('user_pref', 'mic_id_1234@789', time()+3600*24, '/', '', true, true);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/styles.css">
    <title>Hello, world!</title>
</head>
<body>
<header>
    <?php require_once "menu.php"; ?>
</header>

<div class="container" id="main-content">
    <div class="notification is-danger">
        <h1 class="title is-1">Passer des variables dans une URL</h1>
    </div>
    <p>Dans cette exemple: on passe des variables dans un lien href</p>
    <p>
        <a>Dans une balise anchor href="getpost.php?nom=ALAIN&amp;prenom=DELON"</a>
    </p>

    <a href="globales.php?nom=ALAIN&amp;prenom=DELON" class="button is-warning">Passer des variables dans url</a>


    <form action="globales.php" method="get">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control">

        <button class="mt-3 btn btn-outline-success" type="submit" name="btn-valide">Valider</button>
    </form>


    <form action="globales.php" method="post">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">

        <button class="mt-3 btn btn-outline-danger" type="submit" name="btn-valide">Valider</button>
    </form>




<?php
    //Recup des valeurs du formaulaire

    if(isset($_GET['nom'])){
        $nom = $_GET['nom'];
        var_dump($nom);
        echo "<p class='mt-3 alert alert-warning'>Bonjour : " . $nom . " </p>";
    }


    if(isset($_POST['prenom'])){
        $prenom = $_POST['prenom'];
        var_dump($prenom);
        $_SESSION['prenom'] = $prenom;
        echo "<p class='mt-3 alert alert-info'>Bonjour : " . $prenom . " </p>";
        echo " Vous etes connectez en tant que : " . $_SESSION['prenom'];


    }


    //Recup les valeur du cookie (nom)
    //f12 Appli chrome
    if(isset($_COOKIE['user_pref'])){
        echo "Votre id est : " .$_COOKIE['user_pref'];
    }else{
        echo "pas de cookies";
    }

?>
    <a href="session.php" class="btn-outline-success">Test de la session</a>
</div>
</body>
</html>
