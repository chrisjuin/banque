<?php

class PersonneManager
{
  private $personnes = [];

  //Singleton ( La classe ne peut être instanciée qu'une fois)
  private static $instance;


  public static function getInstance()
  {
    if( !self::$instance )
    {
      echo "Instanciation";
      self::$instance = new PersonneManager();
    }
    
    return self::$instance;
  }

  private function __construct()
  {
  }

  private function __clone()
  {
  }

  //Fabrique
  public function addConseiller($prenom, $nom)
  {
    $conseiller = new Conseiller($prenom, $nom);

    array_push($this->personnes, $conseiller);

    return $conseiller;
  }

  public function addClient($prenom, $nom, $conseiller)
  {
    $client = new Client($prenom, $nom, $conseiller);
    array_push($this->personnes, $client) ;

    return $client;
  }
}
