<?php 

/**
 * 
 * 
 * un commentaire
 */
    session_start();

    include_once 'functions.php' ;
    include_once 'database/mysql.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sel et Miel - Gaufres</title>
</head>
<body>

<?php include_once 'header.php'; ?>

</header>
<div class="carte">
       
       <ul>

           <?php
                
                $requete= "
                    SELECT  * FROM gaufres;
                ";

                $lectureGaufres= $mysqlClient->prepare($requete);
                

                $lectureGaufres->execute();


                $listeGaufres = $lectureGaufres->fetchAll();
                

                foreach ($listeGaufres as $uneGaufre) {

                
                    echo "<li>(". $uneGaufre['id']. ") ". $uneGaufre['nom'].
                            " dont le prix est "
                            .$uneGaufre['prix']." </li>";

                            

                }


           ?>

       </ul>
       
   </div>

<?php include_once 'footer.php'; ?>
    
</body>
</html>