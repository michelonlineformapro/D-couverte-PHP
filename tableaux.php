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
<div class="container">
<?php
//boucle

/*
function repeter(int $x, bool $vrai){
    //$x = 0;

    while ($x <= 20 && $vrai == true){
        echo "Afficher 20 fois la variable : " . $x . " OK <br />";
        $x++;
    }
}

repeter(0, true);
*/

//Boucle for

function boucleFor(){
    for($x = 0; $x <= 20; $x++){
        echo "Repeter 20 fois :" . $x. " OK ! <br>";
    }
}

boucleFor();




//DOCS = https://www.php.net/manual/fr/control-structures.foreach.php




    //Tabealu numeroté
$tabNum = ['test', "bob", "robert", "lucie"];
$tabNum2 = array("tableau 2", 45.25, 45, false);

var_dump($tabNum);
?>
<hr>
<?php
var_dump($tabNum2);

//Index 2 du tableau  = 45
echo $tabNum2[2];
?>
<hr>
<?php
//Index 1 du tableau = bob
echo  $tabNum[1];
?>
<hr>
<?php
//Compte les index du tableau en js = tab.length
echo "taille du tableau " . count($tabNum). " elements";
?>
<hr>
<?php
//Stocker la taille du tableau
$taille = count($tabNum2);

for($i = 0; $i < $taille; $i++){
    echo "<br />" .$tabNum2[$i];
}
?>
    <hr>
    <?php
//Tableau associatif
$testTab = array(
    array(
        "cle" => "valeur",
        "question" => "test"
    )
);
    ?>
    <hr>
    <?php
//afficher
//echo $testTab['prenom']. "<br />";

//echo $testTab['tab']['name']. "<br />";


foreach ($testTab as $valeurs){
    echo $valeurs['cle'];
    echo $valeurs['question'];
}

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "<br>Valeur courante de \$a: $v.\n";
}
/*
foreach ($testTab as $key => $item) {
    echo "tableau " . $key . " <br />";
    echo "tableau " . $item . " <br />";
    foreach ($item as $tab => $value){
        echo "sous tableau " . $value . " <br />";
    }
}

*/
    //tableau multi dimmension
    $tabMulti = [
            ["cool", 78, 89.25, false],
        ["autre tanleau", 7845, 88.88, true, null]
    ];
    ?>
    <hr>
    <?php

    var_dump($tabMulti);
    //Le 1er [] accede a l'index du tableau (ici 0 pour le tableau 1 et 1 pour le tableau 2)
    //Ensuite on accede a l'indes de l'element

    echo "<br />test afficher tableau multi numeroté : " .$tabMulti[0][1]." <br> Acces au tableau 2 ...". $tabMulti[1][1];

    $tabMultiAssoc = [
            ["normal", 784512, "good"],
        [
                "cleTan" => "Ok GO",
                "pasTesVite" => "speed",
                "age" => 15
        ]
    ];

    echo "<br>". $tabMultiAssoc[0][1] . " Pour le tableau 2 associatif " .$tabMultiAssoc[1]['cleTan'];

    //Acces au tableau 1
    foreach ($tabMulti as $multi){
        //Acces au tableau 2 depuis le tableau 1
        foreach ($multi as $item) {
            //Afficher les valeur du tableau 2
            echo "<hr>Les valeurs du tableau 2 : $item";
        }
    }
?>
</div>

</body>
</html>
