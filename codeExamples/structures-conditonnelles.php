<?php

//On peut définir des constantes
define("RETOUR_LIGNE", "<br/>");
define("CAPACITE_MAX", 10);


echo "<h2>Structures conditionnelles</h2>"; 
echo "<ul>
         <li>if...else</li>
         <li>Opérateur Ternaire : (condition) ? [instruction-si-vrai] : [instruction-si-faux] </li>
         <li>Switch</li>
      </ul>";




/**
     * Structures conditionnelles
     * 
     * if - else 
     * 
     */

    
     $prixCrepe = 15; 
     $reference = 10;

     if($prixCrepe < $reference){
        echo "Le prix de la crêpe est inférieur à ".$reference;
     }else {
        echo "Le prix de la crêpe est supérieur ou égal à ". $reference;
     }


     /**
      * Opérateur ternaire: (condition) ? [instruction si vrai] : [instruction si faux]
      */


     $prixCrepe = 10; 
   
     //Exemple avec des chaînes de caractères
     //Notation 1
     $result = ($prixCrepe < 10)? "prix Inférieur à 10": "prix supérieur ou égal à 10";

     //Notation 2
     if($prixCrepe < 10){
        $result = "prix Inférieur à 10";
     }else {
        $result = "prix supérieur ou égal à 10";
     }

     //Notation 1 et 2 équivalentes 
     
     //Exemple avec des nombres
     $variableNumerique= ($prixCrepe < 10)? $prixCrepe + 2 : $prixCrepe; 

     echo "Structure Ternaire-résulat avec chaînes :". $result;
     echo "Structure Ternaire-résulat avec nombre :". $variableNumerique;


     echo RETOUR_LIGNE;

     /**
      * Switch 
      */

      $scoreResto= 5; 
      $final; 

      switch($scoreResto){
         case 0: $final= "Vos crêpes ne sont pas bonnes du tout!"; 
                  // break; 

         case 1: $final= "Bof";
                  // break;
         case 2: $final= "Mmmh...peut mieux faire";
                  // break; 
         case 3: $final= "Pas mal du tout";
                  break; 

         case 4: $final=  "Bon ";
                  break; 

         case 5: $final= "C'est super !";
                  break; 
         default: $final= "Aucun avis"; 
      }
      
      echo "Resultat Score: ". $final.RETOUR_LIGNE; 


?> 