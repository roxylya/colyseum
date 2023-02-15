<?php

// on a besoin d'accéder aux constantes :
// require_once(__DIR__ .'/../config/constants.php');
// on a besoin du fichier helpers dd :
// require_once(__DIR__ .'/../helpers/dd.php');

// on a besoin du models :
require_once(__DIR__ . '/../models/Clients.php');


$clients = getClients();

include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/exercice1.php');
include(__DIR__ . '/../views/templates/footer.php');
