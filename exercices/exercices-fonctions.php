<?php

/**
 * Exercice Fonctions - 1
 * 
 * Construire un tableau de caractères 
 * 
 * Par exemple: ['k','a','y','a','k']
 * 
 * Déterminez si le tableau de caractères est un palindrome  
 * Si c'est un palindrome, affichez un message "kayak un palindrome"  
 * Sinon "kayak n'est pas un palindrome"
 */
 
 $premierMotTab= ['r','a','d','a','r'];

 $premierMotTabReverse =array_reverse($premierMotTab); 
 
 echo '<pre>';

 if($premierMotTabReverse == $premierMotTab){
   print_r($premierMotTab); 
   echo " est un tableau palindrome <br/>"; 
 } else {
   print_r($premierMotTab);
   echo " n'est PAS un tableau palindrome"; 

 }


 $secondMotTab= ['l','i','v','r','e'];

 $secondMotTabRev = array_reverse($secondMotTab);


 if($secondMotTabRev == $secondMotTab){
  print_r($secondMotTab);
  echo " est un tableau palindrome <br/>"; 

} else {
  print_r($secondMotTab);
  echo " n'est PAS un tableau palindrome <br/>";
}
echo '</pre>';


 /// Encore mieux = > utiliser la fonction strrev() 
 // 

$radar= 'radar';
$inverseRadar = strrev($radar); 

if($radar == $inverseRadar){
  echo $radar. " est un palindrome <br/>";
}


/** 
 *  Exercice Fonctions 2
 * 
 * Soit un tableau associatif suivant
 *    
 * Si la clé 'type' existe, il affiche son contenu. 
 * Si elle n'existe pas, il la crée et lui ajoute une la valeur de "crêpe"
 */

 $crepe = 

            [
                'nom' => 'sarrasin',
                'prix' => 10,
                'vegan' => true,
                'glutenFree' => true,
                
            ];

  

    if(array_key_exists('type', $crepe)){
      echo "Exercice fonctions-2: Affichage de la valeur de la valeur associée à la clé 'type' <br/>" ;
      echo $crepe['type'];
    }else {
      $crepe['type'] = "type: crêpe";
    }

  /**
   * Exercice Fonctions  3
   * 
   *  Ecrire une fonction qui calcule la TVA - 
   * calculeTva($prixHTVA, $pourcentageTVA);
   * 
   *  
   * */  

 


  
   echo "Soit un prix TVA de 10 EUR et une TVA de 6%, le prix TVAC est de ". calculeTva(10, 0.06). " <br/>";
   function calculeTva($prixHTVA, $pourcentageTVA){
    return $prixHTVA + ($prixHTVA * $pourcentageTVA);
  }

   
?>
