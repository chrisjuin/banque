<?php


require_once('class/Personne.php');
require_once('class/Conseiller.php');
require_once('class/Client.php');
require_once('class/PersonneManager.php');

$persManager = PersonneManager::getInstance();
$persManager = PersonneManager::getInstance();

new PersonneManager();

$conseiller = $persManager->addConseiller("Pierre", "de Soos");
$persManager->addClient("Louis", "Fabre", $conseiller );

var_dump($persManager);


