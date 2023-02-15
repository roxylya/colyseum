<?php 

// on a besoin du models :
require_once(__DIR__ . '/../models/Clients.php');


$clients = getClients20();


include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/exercice3.php');
include(__DIR__ . '/../views/templates/footer.php');