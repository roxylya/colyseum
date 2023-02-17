<?php

// on a besoin d'accéder aux constantes :
require_once(__DIR__ .'/../config/constants.php');


// Afficher tous les clients.

function getShows()
{
    $db = new PDO(DSN, USER, PASSWORD);
    $sql= 'SELECT `title`,`performer`,`date`,`startTime` FROM `shows` ORDER BY `title`;';
    $sth = $db->prepare($sql);
    $sth->execute();
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
