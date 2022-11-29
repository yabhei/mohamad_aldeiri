<?php

class Pays
{
    public $nompays; // name of country;
    private array $arrequipes;
    public function __construct($npays)
    {
        $this->nompays = $npays;
        $this->arrequipes = [];
    }

    public function Addéquipe(Equipe $equipe)
    {
        $this->arrequipes[] = $equipe;
    }

    public function ShowTeams()
    {
        echo $this->nompays . " : <br>";

        foreach ($this->arrequipes as $unequipe) {

            echo $unequipe->noméquipe . "<br>";
        }
    }



}
?>