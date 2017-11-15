<?php


require_once('class/Personne.php');
require_once('class/Conseiller.php');
require_once('class/Client.php');
require_once('class/PersonneManager.php');
require_once('class/Operation.php');
require_once('class/Compte.php');

$persManager = PersonneManager::getInstance();

$conseiller = $persManager->addConseiller("Pierre", "de Soos");
$client = $persManager->addClient("Louis", "Fabre", $conseiller );
//var_dump($persManager);

// $operation = new Operation(550, "ici je suis un commentaire");

// var_dump($operation);

$compte = new Compte ("", 0, "lorem", -950);

var_dump($compte);