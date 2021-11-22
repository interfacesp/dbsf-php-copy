<footer>
           Infos de contact ici
           <p>
                Dernier rafraîchissement de la  page:  <?php echo getCurrentDateAsString(); ?>
           </p>
         
</footer>


<?php
    function getCurrentDateAsString() : string {

        //On définit le fuseau horaire par défaut
        date_default_timezone_set('Europe/Brussels');

        // Date du jour au format: jour-mois-année Heure:minute:secondes
        //https://www.php.net/manual/fr/function.date
        $dateDuJour = date('d-m-Y H:i:s');
        return $dateDuJour;
    }
?> 