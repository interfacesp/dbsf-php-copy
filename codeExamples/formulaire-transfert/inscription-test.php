<?php



if(isset($_POST['user_name']) && isset($_POST['new_password'])){
    //inscription
    $inscriptionEnCours= true; 
    $inscriptionOk = false; 


    if(empty($_POST['user_name'])){
        $nomUtilisateurEstValide = false; 
    }else {
        $nomUtilisateurEstValide = true; 
    }
    
    $passwordValide = !empty($_POST('new_password'));

    // $users-inscrits[] = array('user-name' => $_POST['user_name']) 

}



?>