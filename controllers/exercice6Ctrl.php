<?php

// on a besoin du models :
require_once(__DIR__ . '/../models/Shows.php');



try {
    $shows = getShows();
    include(__DIR__ . '/../views/templates/header.php');
    include(__DIR__ . '/../views/exercice6.php');
    include(__DIR__ . '/../views/templates/footer.php');
} catch (\Throwable $th) {
    include(__DIR__ . '/../views/templates/header.php');
    include(__DIR__ . '/../views/error.php');
    include(__DIR__ . '/../views/templates/footer.php');
}
