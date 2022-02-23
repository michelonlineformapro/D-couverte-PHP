<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Hello, world!</title>
</head>
<body>

<header>
    <?php require_once "pages/menu.php"?>
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


<div class="container-fluid">
    <?php require_once "pages/main.php"?>
</div>

<footer class="container-fluid">
    <?php require_once "pages/footer.php"?>
</footer>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>