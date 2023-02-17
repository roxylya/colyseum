<?php

// on a besoin d'accéder à la db :
require_once(__DIR__ .'/../models/database.php');


// Afficher tous les spectacles par ordre alphabétique des titres.

function getShows():array
{
    $db = dbConnect();
    $sql= 'SELECT `title`,`performer`,`date`,`startTime` FROM `shows` ORDER BY `title`;';
    // $sql= 'SELECT `title`,`performer`,DATE_FORMAT(`date`, "%d/%m/%Y") AS `date`,`startTime` FROM `shows` ORDER BY `title`;';
    $sth = $db->query($sql);
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
