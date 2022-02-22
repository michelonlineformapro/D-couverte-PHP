<?php declare(strict_types= 1);?>

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

    <title>Php HOME</title>
</head>
<body>
<header>
    <?php require_once "menu.php"?>
</header>
<div class="container-fluid">
    <h1 class="text-danger text-center">TEST</h1>
    <?php
    function testTypage(string $prenom, string $nom): string{
        return "<br />test de string : " .$prenom. " test de string avec retour NON VOID  : " .$nom. " alors ?";
    }

 
    $pourquoi = "<br /> le second argument de la fonction est un flottant ! Mais un integer est accepter ? POURQUOI ?";
    echo $pourquoi;

    function bonjour(...$prenoms){
        foreach($prenoms as $p){
            echo '<hr>Ici plusieur argument dans la fonction a grace au spread Operator : <br />Bonjour ' .$p. '<br>';
        }
    }

    $typage = testTypage("bon", "robert");

    echo $typage;

    bonjour('Mathilde', 'Pierre', 'Victor');

    $x = 15;

    function porteeLocale(){
        //Acceder a une vaiable globale ici $x = 15
        global $x;
        //Si on redefinis $x en locale : cette la valeur locale qui prend le dessus
        $x = 12;
        static $locale = "test acces ";
        echo "test de globale : " . $x . " + " .$locale;
    }

    porteeLocale();

    //Test d'acces a une variable locale

   echo "la variable dollars locale dans la fonction porteeLocale() ";

   //Constant
   define("CONSTANTE", "<hr>ceci est une constante<br>");

   echo CONSTANTE;

   $z = "bon";
   $y = "yo";

   $z .= $y. "<br>";

   echo  $z;
   if($z ?? $y){
       var_dump($z);
       var_dump($y);
   }

   $p = 0;
   $toto = $p++;
   $tata = ++$p;
   $titi = $p--;
   $tutu = --$p;

   var_dump($toto);
    var_dump($tata);
    var_dump($titi);
    var_dump($tutu);

    echo $tata. " " . $titi ." ". $tutu." ".$toto;



    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
