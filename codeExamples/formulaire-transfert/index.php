<?php

    $connecté =true;
    
    $maRequete= "
    
            SELECT table_name 
            FROM information_schema.tables 
            WHERE table_schema = 'sel-et-miel'
    
    "; 

?>

<?php if($connecté): ?>

    <?php include_once 'header.php';  ?>

    <p>Bienvenue Chez Sel et Miel </p>

    <?php include_once 'footer.php'; ?>

<?php else: ?>

    <?php    include_once 'login.php'; ?>

<?php endif; ?>