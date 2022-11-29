<?php

class Carriere
{
    public Equipe $équipe;
    public Joueur $joueur;
    public $anneeDebut; // year of player's start 

    public function __construct(Equipe $conequipe, Joueur $conjou, $annee)
    {

        $this->équipe = $conequipe;
        $conequipe->Addplayers($this);
        $this->joueur = $conjou;
        $conjou->Addéquipe($this);
        $this->anneeDebut = $annee;
    }


    public function __toString()
    {
        return $this->équipe . " " . $this->joueur . " " . $this->anneeDebut;
    }






}




?>