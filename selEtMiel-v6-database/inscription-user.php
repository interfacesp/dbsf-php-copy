<?php

include_once 'database/mysql.php';
/**
 * Inclusion des fichiers nécessaires. De quoi a-t-on besoin? 
 * 
 * 1.Besoin d'une session ? -> non: car destiné aux utilisateurs non inscrits 
 * 2.connexion à la base de données ? -> oui 
 *  
 */
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Utilisateur</title>
</head>
<body>

    <?php
           $is_registered = false;

           if(isset($_POST['username']) && isset($_POST['password'])){

            $nomUtilisateur = $_POST['username'];
            $passwd= $_POST['password']; 
    
            $requete= '
        
                INSERT INTO utilisateurs(username, password, nom, prenom) VALUES (:username, :password, NULL, NULL)'; 
    
            $requeteInsertion = $mysqlClient->prepare($requete);
            $requeteInsertion->execute(array(':username' => $nomUtilisateur, ':password' => $passwd));
    
            $is_registered = true;
        }

    ?>
    
    <?php if(!$is_registered): ?> 

        <form method="post" action="inscription-user.php">
        
            <label >Votre nom d'utilisateur </label>
            <input type="text" name="username" >

            <label >Votre mot de passe </label>
            <input type="password" name="password" >

            <input type="submit" value="S'inscrire">

        </form>

    <?php else: ?>
        
        <p>Bravo ! Vous êtes inscrit ! </p>

        <p> Retournez à la page de  <a href="home.php">connexion</a></p>
        

    <?php endif; ?>

</body>
</html>