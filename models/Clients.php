<?php

// on a besoin d'accéder aux constantes :
require_once(__DIR__ .'/../config/constants.php');


// Afficher tous les clients.

function getClients()
{
    $dbh = new PDO(DSN, USER, PASSWORD);
    $sth = $dbh->query('SELECT * FROM `clients`');
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

// Afficher les 20 premiers clients.

function getClients20()
{
    $dbh = new PDO(DSN, USER, PASSWORD);
    $sth = $dbh->query('SELECT * FROM `clients` LIMIT 20');
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

// N'afficher que les clients possédant une carte de fidélité.

function getClientsFidelity()
{
    $dbh = new PDO(DSN, USER, PASSWORD);
    $sth = $dbh->query('SELECT `clients`.* FROM `clients` INNER JOIN `cards`  ON `clients`.`cardNumber` =  `cards`.`cardNumber` WHERE `cards`.`cardTypesId` = 1');
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". 
// Les afficher comme ceci : Nom : Nom du client Prénom : Prénom du client Trier les noms par ordre alphabétique

function getClientsAscM()
{
    $dbh = new PDO(DSN, USER, PASSWORD);
    $sth = $dbh->query("SELECT `firstName`, `lastName` FROM `clients` WHERE `lastname` LIKE 'M%' ORDER BY `lastname`");
    $results = $sth->fetchAll(PDO::FETCH_OBJ);
    return $results;
}