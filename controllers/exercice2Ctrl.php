<?php 

// on a besoin du models :
require_once(__DIR__ . '/../models/Showtypes.php');


$showtypes= getShowtypes();


include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/exercice2.php');
include(__DIR__ . '/../views/templates/footer.php');