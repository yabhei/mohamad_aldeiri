<?php

class Personne
{
    private $nom;
    private $prénom;
    private $sexe;
    private $datedeN;

    public function __construct($pnom, $ppre, $psexe, $pdden)
    {
        $this->nom = $pnom;
        $this->prénom = $ppre;
        $this->sexe = $psexe;
        $this->datedeN = $pdden;
    }




}





?>