<?php

   /**
      * Exercice 6
      * 
      *  Crêpes Sucre: 10 eur
      *  Crêpe Mikado : 15 eur (réduction)
      *  Crêpe Chocolat: 21 eur (réduction)
      *  
      *  Afficher un message de "Réduction" à côté 
      * des crêpes de prix impair
      */


      $crepeSucre = "crêpe au sucre";
      $prixSucre = 10; 
      
      $crepeMikado = "crêpe Mikado";
      $prixMikado = 15; 

      $crepeChoco = "crêpe chocolat";
      $prixChoco = 21;

    /**
     * Un nombre impair est un nombre dont le reste de la division entière est égale à 1.
     *  X est impair si X = (y*2) + 1. Exemple: 5/2 = (2*2) + 1
     * Le modulo % est une opération qui va renvoyer le reste.
     *  Ici,dans l'exemple, avec 5/2, il renverrait 1.
     */

     $labelReduction = "** en réduction** ";
      if($prixSucre % 2 == 1 ){
            echo $crepeSucre . " : " . $prixSucre. " EUR ". $labelReduction. " <br/>";
      }else {
        echo $crepeSucre . " : " . $prixSucre. " EUR <br/>";
      }

    if($prixMikado % 2 == 1 ){
        echo $crepeMikado . " : " . $prixMikado. " EUR ". $labelReduction. " <br/>";
    }else {
        echo $crepeMikado . " : " . $prixMikado. " EUR <br/>";
    }

     

    if($prixChoco % 2 == 1 ){
        echo $crepeChoco . " : " . $prixChoco. " EUR ". $labelReduction. " <br/>";
    }else {
        echo $crepeChoco . " : " . $prixChoco. " EUR <br/>";
    }





  /**
       *  Soit l'assocation suivante: 
       *  
       *  
       *  A -> Table 1
       *  B -> Table 2 
       *  C -> Table 3
       *  D -> Table 4
       *  E -> Table 5
       * 
       * A l'aide d'une instruction "Switch",
       *  construisez
       * les associations ci-dessus de sorte que: 
       * 
       *  Exemple: 
       * $lettre='A';
       * switch($lettre){
       *    case 'A' : echo "Table 1"; 
       *                break ;
       * 
       * }
       * 
       * 
       * 
       
       */



       $lettre= 'B';

       //Affichera: Table 2
       switch($lettre){ 

        case 'A': echo "Table 1";
                  break; 
        case 'B': echo "Table 2";
                  break; 
        case 'C': echo "Table 3";
                  break; 
        case 'D': echo "Table 4";
                  break; 
        case 'E': echo "Table 5";
                  break; 

        default: echo "Aucune table";
                
      }
       
    
  


?>
