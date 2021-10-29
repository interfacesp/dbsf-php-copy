<?php

    /**
    * Exercice 1
    * Afficher "Bienvenue chez Sel & Miel" 
    */

    echo "Bienvenue Chez Sel & Miel <br/>"; 
    echo 'Bienvenue Chez Sel & Miel <br/> '; 

    /**
    * Exercice 2
    *   
    *  Afficher "Bienvenue chez Sel & Miel". 
    *  "Sel & Miel" étant contenue dans une variable 
    */

    $nom = "Sel & Miel";
    echo "Bienvenue chez ". $nom.  "<br/>";
    
    /**
     * 
     * Exercice 3 
     * 
     * Afficher la concaténation de variables (chaînes de caractères)
     * Par ex: "Bienvenue" 
     *         "Chez Sel & Miel"
     * 
     * ou 
     * 
     * "Bienvenue"
     * "Chez"
     * "Sel & Miel"
     * 
     *
     *  Le résultat attendu:  "Bienvenue chez Sel & Miel"
     */


     $bienvenue  = "Bienvenue"; 
     $nom = "Chez Sel & Miel"; 
     echo $bienvenue." ". $nom. " <br/>";  

    /**
     * 
    * Exercice 4 
    * Afficher le nom d'une crêpe et son prix, en utlisant des variables
    *  exemple: Crêpe aux Fraises: 9 EUR
    */

    $prix =9;
    $nomCrepe ="Crêpe aux Fraises"; 
    echo $nomCrepe. " : " .  $prix. " EUR <br/>";

    /**
     * Exercice 5 
     *  Crêpe aux Fraises: 9 EUR
     *  Crêpe au Sucre: 10 EUR
     *  Crêpe aux oeufs: 20 EUR
     * 
     *   Sachant que les prix ci-dessus sont Hors TVA. 
     *   TVA est 6% 
     *   
     *   Afficher les prix TVA comprise. 
     * 
     */

     $tauxTVA= 0.06;
     
     $fraise = "crêpe aux fraises"; 
     $prixHtvaFraise= 9;
     $prixTVACFraise= $prixHtvaFraise + ($prixHtvaFraise * $tauxTVA);
     
     $sucre = "crêpe au sucre"; 
     $prixHtvaSucre = 10;
     $prixTVACsucre = $prixHtvaSucre + ($prixHtvaSucre * $tauxTVA);

     $oeufs = "crêpe aux oeufs"; 
    //Mais attends, une crêpe, c'est d'office avec des oeufs,non?
    //oui, mais on peut faire ce qu'on veut :D  
     $prixHtvaOeufs= 20;
     $prixTVACoeufs = $prixHtvaOeufs + ($prixHtvaOeufs * $tauxTVA);
    
    echo $fraise . " " . $prixHtvaFraise . " EUR (HTVA)  -- " . $prixTVACFraise . " EUR (TVAC) <br/>"; 

    echo $sucre . " " . $prixHtvaSucre . " EUR (HTVA)  -- " . $prixTVACsucre . " EUR (TVAC) <br/>"; 

    echo $oeufs . " " . $prixHtvaOeufs . " EUR (HTVA) ---" . $prixTVACoeufs . " EUR (TVAC) <br/>"; 





?>



