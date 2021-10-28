<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">

    <title>Sel et Miel  <?php //code ici ?> </title>
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Le logo de Sel et Miel"/>
    </header>

    <h1>Bienvenue chez Sel et Miel</h1>
   
 
    
    <?php
        //Code PHP ici


        
        $menu = [
            ["pistache", 10],
            ["fraise", 9],
            ["vanille", 11],
            ["framboise", 9],
            ["caramel", 12]
        ];
        
        $nombreGlaces = count($menu); 
        $weHaveIceCreams= $nombreGlaces > 0;
        echo "<ul>";
    

         for($i= 0; $i <$nombreGlaces ; $i++){
           echo  "<li>". $menu[$i][0]." ------". $menu[$i][1] ."</li>";
        }

     echo "</ul>";
    
        
        

        



    ?> 

    <footer>
            Tél: +32422
            Adresse: De l'autre côté du parc
        
    </footer>

    <?php //code ici?>
</body>
</html>