<?php

/**
 *  Exercice 1
 * 
 * Sel et Miel dispose de 10 Places numérotées de 1 à 10, à l'aide d'une boucle
 *  
 * 
 * Afficher la liste des tables :
 * - Place 1 
 * - Place 2
 * - ...
 * - Place 10 
 * 
 *  Boucle While ou For
 * 
 *  Exemple: 
 *   while (...) {
 *      affiche numéro 
 *    }
 * 
 */

 $compteur = 1; 
 while ($compteur <= 10){
   echo "Place ". $compteur. "<br />"; 
   $compteur++;   // $compteur = $compteur +  1 
 }

echo "Avec boucle For <br/>"; 

 $position= 1;
 for ($position; $position <= 10; $position++){
      echo "Place ". $position. "<br />";
 }

 /**
  * Equivalence des notations
  */
 //$pos++
 //$pos = $pos + 1;
 //$pos+= 1;


  

 /**
  *  Exercice 2
  * 
  *  Soit un tableau de crêpes
  *  Afficher 1 crêpe sur 2. 
  *  Exemple: 
  *        ['sarrasin', 'patate', 'amandes', 'chocolat', 'pistache']

  * Affichage : sarrasin, amandes, pistache
  * Affichage à l'envers: pistache, chocolat, amandes, patate,sarrasin
  */

echo "Exercice 2 - Une solution <br/>";

$crepes = ['sarrasin', 'patate', 'amandes', 'chocolat', 'pistache'];

$tailleCrepes= count($crepes);



for($pos2 = 0; $pos2 < $tailleCrepes; $pos2 = $pos2 + 2){
   echo $crepes[$pos2]. " <br/>";
}


  /**
   * Exercice 3
   * 
   * Créer un tableau avec une liste de noms de crêpes et leur prix. 
  * Ensuite, parcourez ce tableau en affichant le contenu
  * Indice : Tableau de tableaux 
  *
  *  
  *  Exemple: 
   * $menu=   [
   *                ['sarrasin', 10],
   *                ['mikado', 12]
   *               ['chocolat', 15]
   * 
   *          ]
   *   
   * // Exemple avec boucle : 
   *    for (...) {
   *          ... $menu[$index][0] ... $menu[$index][1]
   *      }
   * 
   * 
   */
   $monMenu = [
            ['sarrasin', 10],
            ['mikado', 12],
            ['chocolat', 15]
   ];

   $tailleMenu = count($monMenu);
   for ($indice=0; $indice < $tailleMenu; $indice++) { 
      echo "Le prix de la  crêpe ". $monMenu[$indice][0]. " est de ". $monMenu[$indice][1]. " EUR </br>";
   }

   /**
    * Exercice 4 - Tableaux associatifs 
    *    
    *    Créer un menu avec 3 ou 4 crêpes, en utilisant un tableau associatif
    *    ayant comme clés/propriétes:
    *    - nom, prix, vegan (true/false), glutenFree(true/false)
    *     
    *    
    *   1. Afficher Un Menu dans le style: 

    *       Sarrasin...... 10 EUR (Vegan, Sans gluten)
    *
    *   2. Afficher uniquement des crêpes Vegan dont le prix est supérieur à 10 EUR
    * 
    */
  $carte= [
      //crêpe 1
      [
         'nom' => 'sarrasin',
         'prix' => 10,
         'vegan' => true,
         'glutenFree' => true
      ],

      //crêpe2

      [
         'nom' => 'Mikado au Lait de vache',
         'prix' => 15,
         'vegan' => false,
         'glutenFree' => true
      ],
      // crêpe 3
      [
         'nom' => 'Chocolat',
         'prix' => 26,
         'vegan' => false,
         'glutenFree' => true
      ]
  ];  
  
   /**
    * 1. Affichage du Menu
    *  */  
  
   $nombreTotal= count($carte);

   for ($index = 0; $index < $nombreTotal ; $index++) {

      $isVegan = $carte[$index]['vegan'];
      $isGlutenFree = $carte[$index]['glutenFree'];

      $affichageAllergene="";
      
      //$chaine.= "texte"; équivalent $chaine = $chaine. "texte";
      if($isVegan) {
         $affichageAllergene.="(Vegan";
      }

      if($isGlutenFree){

         if($isVegan){
            $affichageAllergene.= ", Sans Gluten)";
         }else {
            $affichageAllergene.="(Sans Gluten)";
         }        

      }

   
      // echo $carte[$index]['nom']. ".........".$carte[$index]['prix']. " EUR ".$affichageAllergene. " <br/>";

      //Deuxieùme version affichage

      $separation= "......";
      $nomCrepe = $carte[$index]['nom'];
      $prixCrepe = $carte[$index]['prix'];
      
      // echo $nomCrepe. $separation. " EUR". $affichageAllergene. "<br/>";
   
   
   }
  


/**
 * 2. Affichage des crêpes Vegan dont le prix est supérieur à 10 EUR
 */

 echo "<h3>Liste des crêpes Vegan dont prix supérieur à 10</h3>";

$found= 0;

   for($indice = 0; $indice < $nombreTotal; $indice++) {

      $lePrix = $carte[$indice]['prix'];
      $estVegan = $carte[$indice]['vegan'];
      
      if($estVegan && $lePrix > 10){
         echo $carte[$indice]['nom']. "-----------------------". $lePrix. " EUR <br/>" ; 
         $found++;
      }
   }

   if($found == 0 ){
         echo "Nous n'avons pas trouvé de crêpes de ce genre";
   }

?>
