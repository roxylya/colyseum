<?php

// on a besoin d'accéder à la db :
require_once(__DIR__ .'/../models/database.php');

// Afficher tous les types de spectacles possibles.

function getShowtypes(): array
{
    $db = dbConnect();;
    $sql = 'SELECT `type` FROM `showtypes`;';
    $sth = $db->query($sql);
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
