<?php

class Acteur extends Personne
{

    private array $actinfilms;


    public function __construct($actnom, $actpre, $actsexe, $actdden)
    {
        parent::__construct($actnom, $actpre, $actsexe, $actdden);
        $this->actinfilms = [];
    }



    public function Acajouterfilm(Film $flm)
    {
        $this->actinfilms[] = $flm;

    }



}





?>