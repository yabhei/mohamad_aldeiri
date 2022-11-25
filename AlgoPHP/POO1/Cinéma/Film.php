<?php

class Film
{
    private $titre;
    private $datedesortie;
    private $durée;
    private $résumé;
    private $genref;
    private $rolef;
    public Realisateur $realisateur;
    public Acteur $acteur;
    private Genre $genre;
    private Role $role;
    private Casting $cast;


    public function __construct($tit, $dateds, $dure, $resum, $genref, $rolef, Realisateur $realis, Acteur $act, Genre $gen, Role $rol, Casting $cas)
    {
        $this->titre = $tit;
        $this->datedesortie = $dateds;
        $this->durée = $dure;
        $this->résumé = $resum;
        $this->realisateur->Rajouterfilm($this);
        $this->acteur;
        $this->genre->ajouterfilmG($this, $genref);
        $this->role->ajouterfilmR($rolef, $act);


    }


    public function gettitre()
    {
        return $this->titre;

    }

    public function settitre($t)
    {
        $this->titre = $t;

    }

    public function getdatesortie()
    {
        return $this->datedesortie;

    }

    public function setdatesortie($dds)
    {
        $this->datedesortie = $dds;


    }
    public function getdurée()
    {
        return $this->durée;

    }

    public function setdurée($dr)
    {
        $this->durée = $dr;

    }
    public function getrésumé()
    {
        return $this->résumé;


    }

    public function setrésumé($res)
    {
        $this->résumé = $res;

    }

    public function __toString()
    {
        return "Titre : " . $this->titre . " <br>Date de sortie : " . $this->datedesortie . "<br> Durée :  " . $this->durée . "<br> Genre :  " . $this->genre . "<br> Résumé :  " . $this->résumé;
    }




}


?>