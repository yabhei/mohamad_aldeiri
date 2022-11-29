<?php

class Equipe
{

    public $noméquipe; // name of team
    public $date_fondation;

    public array $arrjoueurs;
    private Pays $pays;
    public function __construct($connom, $date_fondation, Pays $conpays)
    {
        $this->noméquipe = $connom;
        $this->date_fondation = $date_fondation;
        $this->arrjoueurs = [];
        $this->pays = $conpays;
        $conpays->Addéquipe($this);
    }

    public function __toString()
    {
        return $this->noméquipe . "";
    }

    public function Addplayers(Carriere $carr) //add player

    {
        $this->arrjoueurs[] = $carr;
    }

    public function ShowPlayers() // to display all players in the team

    {
        echo "<h3>" . $this->noméquipe . " : </h3>" . "<br> <h5>" . $this->pays->nompays . " _ " . $this->date_fondation . " </h5> <br>";

        foreach ($this->arrjoueurs as $player) {
            echo $player->joueur->prénom . " " . $player->joueur->nom . "(" . $player->anneeDebut . ") <br>";
        }

    }






}


?>