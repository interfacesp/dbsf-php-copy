<?php 

/**
 *      Construction du menu
 */
function getMenu(){
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

/**
 * Fonction qui donne une liste de gaufres
 */
function getGaufres() {
    return ['Gaufre Sucre', 'Gaufre au chocolat', 'Sarrasin', 'Banane', 'Mikado'];
}



function getGaufresTexte(){
    return 'Liste gaufres';
}


function inscriptionUtilisateur($mysqlClient, $newUser): bool{
    
    $nomUtilisateur = $newUser['new_username'];
    $passwd = $newUser['new_password'];
    
    $requete= '
                    INSERT 
                    INTO utilisateurs(username, password, nom, prenom)
                    VALUES (:username, :password, NULL, NULL)
                '; 

    $requeteInsertion = $mysqlClient->prepare($requete);
    $requeteInsertion->execute(array(':username' => $nomUtilisateur, ':password' => $passwd));

    return true; 
}



?>