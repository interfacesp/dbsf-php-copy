<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">

    <title>Sel et Miel   </title>
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Le logo de Sel et Miel"/>
    </header>

    <h1>Bienvenue chez Sel et Miel</h1>
   
    <p>
            Dernier rafraîchissement de la page: 
            <?php 
                //On définit le fuseau horaire par défaut
                date_default_timezone_set('Europe/Brussels');

                // Date du jour au format: jour-mois-année Heure:minute:secondes
                //https://www.php.net/manual/fr/function.date
                $dateDuJour = date('d-m-Y H:i:s');
                echo  $dateDuJour;
            ?>
    </p>


    
    <div class="carte">
       
        <ul>

            <?php
                
                //exemple avec fonction
                $menu = geMenu();  
                $nombreGlaces = count($menu); 
                for($i= 0; $i <$nombreGlaces ; $i++){
                echo  "<li>". $menu[$i][0]." ------". $menu[$i][1] ."</li>";
                }

            ?>

        </ul>
        
    </div>

    <footer>
           Infos de contact ici
    </footer>

    <?php //code ici?>
</body>
</html>


<?php 

/**
 *      Construction du menu
 */
function geMenu(){
    return
    [
        ["pistache", 10],
        ["fraise", 9],
        ["vanille", 11],
        ["framboise", 9],
        ["caramel", 12],
        ["Crêpe spéciale", 12]

    ];
}

?>