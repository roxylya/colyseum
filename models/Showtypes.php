<?php

require_once(__DIR__ . '/../config/constants.php');

// Afficher tous les types de spectacles possibles.

function getShowtypes(){
    $dbh = new PDO(DSN, USER, PASSWORD);
    $sql= 'SELECT `type` FROM `showtypes`';
    $sth = $dbh->query($sql);
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

