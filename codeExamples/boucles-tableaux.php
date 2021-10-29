<?php

define ("END_LINE", "<br />");

/**
 * Boucle - While 
 */

$counter=1;

while ($counter <= 10 ) {
        echo "C'est bon, les crêpes!". END_LINE; 
        $counter++;
}

$index=1;
while ($index <= 10){
        echo "Index numéro". $index; 
        $index++;
}

/**
 * Les Tableaux 
 */


 /**
  * Tableau numérotés 
  */

$unTableau = ['1', '2', '3', 10, -2];
$unTableauDeChaines= ['Un', "Deux", "Trois"];
$unTableauDeTableaux =  [
                         ['Petit Tonnerre', 'Yakari'], 
                         ['Tintin', 'Milou']
                        ]; 



$unTableau[] = 12;
$unTableau[] = 13; 
$unTableau[0] = 15;

// Les indices d'un tableau commencent toujours à 0 (zéro)

//Affiche le 1 élément 
echo $unTableau[0].END_LINE;

//Affiche le 3ème élément - 
echo $unTableau[2];

// Parcours de tableau avec boucle
/**
 * Boucle For 
 * Boucle Foreach 
 * Fonction spéciale déboggage : print_r
 
 */

 $i=1; 
 $i++; //$i = $i + 1;
 $taille= count($unTableau);

 for($indexParcours= 0; $indexParcours < $taille ; $indexParcours++){
         echo $unTableau[$indexParcours].END_LINE;
         echo "Itération numéro ".$indexParcours. END_LINE;

 }

/**
 * 
 */

 foreach ($unTableau as $elem) {
         echo $elem;
 }

 
 //Fonction spéciale déboggage 
 echo '<pre>';
        print_r($unTableau);
 echo '</pre>';

/**
 * Affichage de code HTML plus jolie
 */

$crepes= ['Sarrasin', "Mikado", "Fraises"];
$nombreCrepes= count($crepes);
$titre = "<h1>Liste des crêpes</h1>"; 
$sousTitre= "<h2>Mes préférences</h2>";

$liste= "<ul>";
for($indexParcours= 0; $indexParcours < $nombreCrepes ; $indexParcours++){
        $liste.= "<li>".$crepes[$indexParcours]."</li>";
}

$liste.= "</ul>";

echo $titre;
echo $sousTitre;
echo $liste;


/**
 * Tableaux associatifs 
 */

$ficheIdentite= [
        'nom' => 'Gahungere',
        'prenom' => 'Espoir',
        'age' => 18,
        'typeDeMusiquePref' => ['Rap', 'hip-hop','classique']
];

//Affiche Gahungere
echo $ficheIdentite['nom']. "<br/>"; 

//Affiche 18
echo $ficheIdentite['age']. "<br/>";

// Ajout d'une nouvelle clé et valeur
$ficheIdentite['hobby'] = "danse";
echo "Après ajout nouvelle clé 'hobby' : ". $ficheIdentite['hobby']. "<br/>"; 

  $menu = [
                ['nom' => 'sarrasin',
                 'prix' => 10, 
                 'vegan' => false,
                 'glutenFree' => false       
                ],

                ['nom' => 'mikado',
                 'prix' => 15, 
                 'vegan' => true,
                 'glutenFree' => false       
                ]

          ];

echo '<pre>';
print_r($menu);
echo '</pre>';

?>