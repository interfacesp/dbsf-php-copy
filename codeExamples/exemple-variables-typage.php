<?php

 echo "<h2>Variables et Types </h2>";

/**
 * Déclaraction d'une variable 
 * 
 * Déclaration d'une variable ne fait que réserver un espace mémoire pour cet variable. 
 * En terme d'affichage, il n'y aura rien à afficher. 
 * 
 * 
 */
 $nom = 'Gahungere';
 $nomBis= "Gahungere";
 $unNom_Tres_Long_VraimentTres_Long = "Bachibouzouzouzouz";  
 $nombreEntier = 10; 
 $nombreEntierNegatif = -10; 
 $nombreDecimal = 10.20; 
 $isCool= false; 
 $isAlmostWeekend= true; 

 echo $unNom_Tres_Long_VraimentTres_Long ;
 

 /**
  * Concaténation de chaines de caractères 
  */

  echo "<h3>Chaines de caractères</h3>";

   echo 'Retour à la ligne'. "\n";
   echo 'Mon nom est'. $unNom_Tres_Long_VraimentTres_Long. " <br />"; 
  
 /**
  * Opérations 
  */

   $total = 10 + 12; 
   $soustraction = 10 - 2; 


   echo 'simple guillement : Le total est $total'; 
   echo "double guillement: Le total est $total";
   echo "test fin de ligne" ; 

   /**
    * Retour à la ligne
    */
    echo "******************* Retour à la ligne******************* <br />"; 
    
    echo "Retour à la ligne en HTML <br/>";
    echo "Autre ligne";

    echo "Retour à la ligne en ligne de commande \n";

   

?>
