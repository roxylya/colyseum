<?php 

// on a besoin du models :
require_once(__DIR__ . '/../models/Shows.php');


$shows = getShows();


include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/exercice6.php');
include(__DIR__ . '/../views/templates/footer.php');