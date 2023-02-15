<?php

// on a besoin d'accéder aux constantes :
require_once(__DIR__ .'/../config/constants.php');


// Afficher tous les clients.

function getShows()
{
    $dbh = new PDO(DSN, USER, PASSWORD);
    $sth = $dbh->query('SELECT `title`,`performer`,`date`,`startTime` FROM `shows` ORDER BY `title`');
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
