<?php


    if(isset($_POST['username']) && isset($_POST['password'])){

        $nomUtilisateur = $_POST['username'];
        $passwd= $_POST['password']; 

        $requete= '
    
            INSERT INTO utilisateurs VALUES (:username, :password)'; 

        $requeteInsertion = $mySqlClient->prepare($requete);
        $requeteInsertion->execute(array(':username' => $nomUtilisateur, ':password' => $passwd));


    }

    


?>