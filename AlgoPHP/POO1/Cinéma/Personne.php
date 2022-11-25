<?php

class Personne
{
    public $nom;
    public $prénom;
    public $sexe;
    public $datedeN;

    public function __construct($pnom, $ppre, $psexe, $pdden)
    {
        $this->nom = $pnom;
        $this->prénom = $ppre;
        $this->sexe = $psexe;
        $this->datedeN = $pdden;
    }




}





?>