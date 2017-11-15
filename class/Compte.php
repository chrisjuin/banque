<?php

class Compte 
{
    private $numero; 
    private $solde; 
    private $opetation; 
    private $client; 
    private $conseillier; 
    private $depassementAutoriser; 

    public static $nouveauCompte = 1; 
    public function __construct($numero, $solde, $client, $depassementAutoriser)
{
    $this->numero = self::$nouveauCompte++;   
    $this->client = $client;  
    $this->depassementAutoriser = $depassementAutoriser;
    $this->setMontantDebit = ($solde); 
    if($solde == 0 ){
        $this->setSolde("Attention");
    }elseif($solde < 0 ){
        $this->setSolde("Credit"); 
    }
    $this->setMontantCredit = ($solde); 
    if($solde > 0){
        $this->setSolde("Debit");
    }
    $this->setCompteBloquer = ($solde);
    if($solde < $depassementAutoriser){
        $this->setsolde("bloquer");
    }

}

public function setSolde($solde)
{
    $this->solde = $solde; 
}

public function getSolde()
{

    return $this->solde; 
}

public function setMontantCredit($solde)
{
    $this->solde = $solde; 
}

public function getMontantCredit()
{
    return $this->solde; 
}

public function setMontantDebit($solde)
{
    $this->solde = $solde;

}

public function getMontantDebit()
{
    return $this->solde; 
}

public function setCompteBloquer($solde)
{
    $this->solde = $solde;

}

public function getCompteBloquer()
{
    return $this->solde;
}

public function setDepassementAutoriser($depassementAutoriser)
{
    $this->depassementAutoriser = $depassementAutoriser;
}

public function getDepassementAutoriser()
{
    return $this->depassementAutoriser;
}


public function __toString()
{
    return get_class($this)." : numero du compte ".$this->numero.
        " nom du client" .$this->client;
    }
        
public static function getNouveauCompte()
{
    return self::$nouveauCompte; 
}

}