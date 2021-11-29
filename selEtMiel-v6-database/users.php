<?php

    
    $users =[
        //element 1
        [
            'username' => 'julien',
            'password' => 'hello'
        ],
        //---- 
        //element 2
        [
            'username' => 'virginie',
            'password' => 'hello'
        ]
        //---

    ];

    $trouvé= false; 
    $nomUtilisateur = 'lila';
    $motDePasse = 'hello';
    foreach ($users as $element){

            if($element['username'] == $nomUtilisateur && $element['password'] == $motDePasse){
                
                $trouvé = true; 
            }

    }

    

?>