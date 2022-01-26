<?php

define("MYSQL_HOST","localhost");
define ("MYSQL_PORT", 3306); 
define ("MYSQL_DB_NAME", "sel-et-miel");
define ("MYSQL_USERNAME", "root"); 
define ("MYSQL_PASSWORD", "root");
try {

    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_DB_NAME, MYSQL_PORT),
        MYSQL_USERNAME,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $exception) {
    die('Oops, il y a eu problème : '.$exception->getMessage());
}


?>