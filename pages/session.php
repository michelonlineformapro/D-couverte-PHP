<?php
if(!isset($_SESSION))
{
    session_start();
}
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
</body>
</html>


<?php
if(isset($_SESSION['prenom'])){
    $session = $_SESSION['prenom'];
    echo "<h1 class='text-info text-center alert alert-secondary'>Bonjour $session !</h1>";
    echo "<a href='globales.php' class='btn btn-outline-success'>Retour</a>";
}else{
    echo "<a href='globales.php' class='btn btn-outline-danger'>Erreur : retour</a>";
}
/*Si la variable de session age est définie, on echo sa valeur
             *puis on la détruit avec unset()*/

?>
<form action="session.php" method="post">
    <button type="submit" name="delete_session" class="btn btn-outline-danger">Deconnexion</button>
</form>
<?php


if(isset($_POST['delete_session'])){
    if(isset($_SESSION['prenom'])){
        echo 'Tu es ' .$_SESSION['prenom']. '<br>';
        unset($_SESSION['prenom']);
    }
    /*On détruit les données de session*/
    session_destroy();
    echo "vous etes deconnectez";
}


?>



