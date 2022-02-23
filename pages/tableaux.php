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
        <?php
        /*
        function repeter(int $x, bool $vrai){
            while ($x <= 10 && $vrai == true){
                echo "<br> Repeter :" .$x;
                $x++;
            }
        }

        repeter(0, true);
        */

        //Boucle
        /*
        for($x = 0; $x <= 20; $x++){
            echo "Repeter la variable " .$x . " OK ! <br>";
        }
        */

        $tableau = ['djkzjd', 15, 15.25, true];

        $tableau2 = array("mic", 15, 78, false);

        /*
        var_dump($tableau);
        var_dump($tableau2);

        echo "L'index 2 du tableau 1 " .$tableau[2];

        $compterIndex = count($tableau);
        var_dump($compterIndex);

        for ($x = 0; $x < $compterIndex; $x++){
            echo "lister un tableau numeroté : "  .$tableau[$x] . "<br/>";
        }

        foreach ($tableau as $alias){
            $res .= $alias . "<br>";

        }
        echo $res;
        */

        /*
        $tableauAssoc = [
                "id" => 1,
                "prenom" => "mic",
                "taille" => 1.70,
                "recette" => "thon a la tomate"
        ];

        echo "tu mesure : " .$tableauAssoc['taille']. " cm";

        foreach ($tableauAssoc as $alias){
            echo "La valeur du tableau associatif : " . $alias . "<br />";
        }
        */

        //tableau multi dimension
        $tableauMultiDim = [
                ['laura', 78, 12.25],
            [42, "hello",true, 78.25]
        ];

        echo "<br />Acces tab 1 index 1 " .$tableauMultiDim[0][1]; //78
        echo "<br />Acces tab 2 index 2 " .$tableauMultiDim[1][1]; //true = 1


        $tableauMultiDimAssoc = [
            [
                    "id" => 1,
                "prenom" => "bob"
            ],
            [
                    "test" => 15,
                "cool" =>"resrrerersrsr"
            ]
        ];

        foreach ($tableauMultiDimAssoc as $pizza){
            foreach ($pizza as $res){
                echo "<br>test des tableaux multi Dim + assoc : " . $res . " <br>";
            }
        }

        $a = "bob";

        $b = " eponge";

        //$a .= $b;

        $sql = "INSERT INTO `jeans`(`id`, `couleur`, `taille`, `prix`) VALUES ([value-1],[value-2],[value-3],[value-4])";

        echo "<br> {$a} {$b}";




        ?>



    <p>texte</p>
    </div>

</body>

<script>
    let tableau = ['djkzjd', 15, 15.25, true];
    let tab2 = new Array("kkef", 15)
    let objet = {
        id:1,
        nom:"toto"
    }

    console.log(objet.nom)
    console.log(tab[0][2])


</script>

</html>
