<?php

class Acteur extends Personne
{

    private array $actinfilms;


    public function __construct($actnom, $actpre, $actsexe, $actdden)
    {
   
        parent::__construct($actnom, $actpre, $actsexe, $actdden);
        $this->actinfilms = [];
    }



    public function ajouterfilmAct($flm)
    {
        $this->actinfilms[] = $flm;

    }

    public function ListefilmofAct(){
        echo "The films of the actor ".$this->nom." ".$this->prénom." are : <br>";
        foreach($this->actinfilms as $filact){
           echo $filact."</br>";
           }
        
        }
    }









?>