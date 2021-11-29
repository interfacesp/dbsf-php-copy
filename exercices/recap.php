<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Recap PHP </title>
</head>
<body>

<?php
    $prenom="Menen";
    $prenom; 
    $prenomEspace ="Menen ";
    $nom = "Szymon";

    //echo n'acceptent que chaines de caractères, à spéciifer entre guillemets
    echo $prenom."</br>"; 
    
    echo $prenom." ".$nom; //

    echo "</br>";

    if(isset($prenom)){
        echo $prenom;
    }else {
        echo "Pas de prénom";
    }

    echo "</br>";

    if(!empty($prenom)){
        echo $prenom;
    }else {
        //
        echo "rien dans le prénom. Autrement dit: prénom considéré comme false";
    }

    echo "</br>";

    if($prenom == true) {
        echo "Prenom considérée commme true"; 
    }else  {
        echo "Prenom considéré comme false";
    }

    $prenoms=[
        "Virginie",
        "Sebastien",
        "Valentina",
        "Victoria",
        "Menen",
        "Espoir"
    ];
    /**
     * Comment afficher la liste des prénoms? 
     *  Virginie
     *  Sébastien
     *  Valentina
     *  etc.
     */

    echo "</br>"; 
    echo "var dump ";
    echo "<pre>";
    var_dump($prenoms);
    echo "</pre>";

    echo "print_r"; 
    echo "<pre>";
    print_r($prenoms);
    echo "</pre>";

    //définition d'une constante
    define("END_LINE","</br>");
  
    
    echo implode("<br>",$prenoms);

    echo "</br> ----------- Exercice - boucle for </br>";

    $taille= count($prenoms);
    for($i= 0; $i < $taille; $i++){
        // echo $prenoms[$i]. PHP_EOL;
        // echo nl2br($prenoms[$i]);
        echo $prenoms[$i]. END_LINE;
    }


    echo "</br> ----------- Exercice - boucle foreach </br>";

    foreach($prenoms as $prenom){
        echo ($prenom."</br>");
    }

    $prenomsAge = [
        "Virginie" => 30,
        "Sebastien" => 30,
        "Valentina" => 31,
        "Victoria" => 41,
        "Menen" => 35,
        "Espoir" => 33,
        2 => 15
    ];

    echo "</br>--- Age de Valentina -- </br>";
    echo $prenomsAge['Valentina'];
    
    echo "<pre>";
    print_r($prenomsAge);
    echo "</pre>";

    echo $prenomsAge[2]; 


?>

<ul>
    <li>Gaufres aux fraises dont le prix est 20.20</li>
    <li>Gaufres aux myrtilles dont le prix est 11.20 </li>
</ul>
    
</body>
</html>

<?php

    [
        [
            'nom'=> 'valentina',
            'password' => 'hello',
            'nom' => NULL, 
            'prenom' => NULL
        ],

        [
            'nom'=> 'menen',
            'password' => 'hello',
            'nom' => NULL, 
            'prenom' => NULL
        ]
    ]
?>