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

// Ajout d'une nouvelle clé et valeur
echo "Avant ajout: ". $crepe['newKey']. "<br/>";
$crepe['newKey'] = "nouvelleValeur";
echo "Après ajout: ". $crepe['newKey']. "<br/>"; 

  /**
   * Exercice Fonctions  3
   * 
   *  Ecrire une fonction qui calcule la TVA
   *  
   *  calculeTva($prixHTVA, $pourcentageTVA);
   * 
   *  */          
?>
