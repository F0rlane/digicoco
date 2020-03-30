<?php

$DB_HOST = "localhost";
$DB_NAME = "digicoco";
$DB_USER = "root";
$DB_PASSWORD = ""; //Mettre root si vous utilisez-mamp sinon ne pas mettre de mdp

try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}