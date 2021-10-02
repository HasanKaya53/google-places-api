<?php
require_once("google.api.class.php");

$adressFrom = $_POST["fromToinput"];
$addressTo = $_POST["moveToinput"];


$googleAPI = new Google;


$DistanceKm = $googleAPI->getDistance($adressFrom, $addressTo, "K");
$DistanceMiles = $googleAPI->getDistance($adressFrom, $addressTo, "M");


echo $DistanceKm;


?>