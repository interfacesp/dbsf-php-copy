<?php

/**
 * Documentation sur les fonctions: 
 * http://php.net 
 */


 /**
  * Calcule la taille de la chaîne
  * strlen()
  */
$nomCrepe= "Sarrasin";
$nombreCar = strlen($nomCrepe);

$var = "1990";
// echo "Resultat " . strlen($var);

/**
 *  array_reverse 
 * 
 */

 $tableau = ['Sarrasin','pistache', 'cacahuète'];
// echo "Résultat echo d'un tableau: ". $tableau;

$nbElements = count($tableau);
//Dernier élement
$tableau[$nbElements-1];

echo "Tableau initial <br/>";

echo "<pre>";
print_r($tableau);
echo "</pre>";

 $tableauRenverse= array_reverse($tableau);


 echo "Tableau renversé <br/>";

 echo "<pre>";
 print_r($tableauRenverse);
 echo "</pre>";

 //print_r prend toute variable en paramètre
//  print_r($tableau[0]);


/**
 * array_key_exists 
 */

$crepe= [
    'nom' => 'sarrasin',
     'prix' => 10, 
     'vegan' => false,
     'glutenFree' => false       
];

//Affiche que la clé prix existe
if(array_key_exists("prix", $crepe)){
    echo "La clé prix existe";
}

//N'affiche rien
if(array_key_exists("blabla", $crepe)){
    echo "La clé blabla existe";
}


/**
 * Définition d'une fonction personnalisée
 * 
 */
function addition($nombre1, $nombre2){
    return $nombre1 + $nombre2;
}

echo "2+2 = ".addition(2,2). "<br/>";
?>