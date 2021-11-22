<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
    <title>Fiche Identite</title>
</head>
<body>


    <div class="container">
            
    <form method="post" action="traitement-fiche.php">

    <div class="form-group">
        <label for="leNom">Nom: </label>
        <input type="text" name="nom" id="leNom">
    </div>

     <div class="form-group">
        <label for="lePrenom">Prénom: </label>
        <input type="text" name="prenom" id="lePrenom"> 
    </div>

    <div class="form-group">
            <label for="message">Message: </label> <br>

            <textarea id="message" name="message" rows="5" cols="10">
            </textarea>
        </div>


        <input type="submit" value="Soumettre/Envoyer">
        <input type="reset" value="Reset">
</form>
</div>


    
</body>
</html>