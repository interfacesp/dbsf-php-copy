<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire Contact</title>
</head>
<body>

<?php include_once 'header.php'; ?>
    
<div class="container">
            
    <form method="post" action="">
        
        <div class="form-group">
            <label for="leNom">Nom: </label>
            <input type="text" name="name" id="leNom">
        </div>
          
        
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email"> 
        </div>

        <div class="form-group">
            <label for="message">Message: </label> <br>

            <textarea id="message" name="message">
        </div>
        
        <input type="submit" value="Envoyer">
    </form>
    </div>
        

    
    <!-- <h2>Exercice - Formulaire </h2>

    <p>
        Mettez un formulaire un contact avec: 
        <ul>
            <li>Nom de la personne qui prend contact </li>
            <li>Email de la personne qui contact</li>
            <li>Champ text (de type textarea) contenant le message</li>
            <li>Bouton pour soumettre</li>
        </ul>

        Inspirez-vous de l'exempe de la fiche d'identité

    </p> -->
</body>
</html>