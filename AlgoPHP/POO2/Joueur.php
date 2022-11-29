<?php

class Joueur
{
    public $nom; // lastname of player
    public $prénom; // firstname of player
    private $age; // age of player
    private $nationalité; // nationality of player 
    private array $arrequipes; // the teams of player
    public function __construct($njoueur, $préjoueur, $agejoueur, $natjoueur)
    {
        $this->nom = $njoueur;
        $this->prénom = $préjoueur;
        $this->age = $agejoueur;
        $this->nationalité = $natjoueur;
        $this->arrequipes = [];

    }

    public function __toString()
    {
        return $this->prénom . " " . $this->nom;
    }


    public function Addéquipe(Carriere $carr) //add team

    {
        $this->arrequipes[] = $carr;
    }

    public function ShowTeams() // to display all teams of player

    {
        echo $this->prénom . " " . $this->nom . "<br>";
        echo $this->nationalité . " _ " . $this->age . " ans <br>";
        foreach ($this->arrequipes as $unequipe) {

            echo $unequipe->équipe->noméquipe . "(" . $unequipe->anneeDebut . ") <br>";
        }
    }




}





?>