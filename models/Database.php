<?php 
require_once(__DIR__ . '/../config/constants.php');


function dbConnect(){
 $db = new PDO(DSN, USER, PASSWORD);   
 return $db;
}
