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
        $show = "<div> <h1>" . $this->prénom . " " . $this->nom . "</h1><p>" . $this->nationalité . " _ " . $this->age . "</p></div><ul>";

        foreach ($this->arrequipes as $unequipe) {

            $show .= "<li>" . $unequipe->équipe->noméquipe . "(" . $unequipe->anneeDebut . ") </li><br>";
        }
        $show .= "</ul>";
        return $show;
    }




}





?>