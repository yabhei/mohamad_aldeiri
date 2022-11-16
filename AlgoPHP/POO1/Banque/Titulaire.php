<?php

require "Compte_Bancaire.php";
class Titulaire
{
    private $nom;
    private $prénom;
    private $datedenaissance;
    private $ville;
    private array $sescomptes;

    private CompteBancaire $cbo;

    public function __construct($nom, $pre, $datedn, $ville, CompteBancaire $cb)
    {
        // parent::__construct($libt, $solt, $devt, $titunique);

        $this->nom = $nom;
        $this->prénom = $pre;
        $this->datedenaissance = $datedn;
        $this->ville = $ville;
        $this->sescomptes[] = $cb->libellé;

    }

    public function setnom($name)
    {
        $this->nom = $name;
    }

    public function getnom()
    {
        return $this->nom;
    }

    public function setprenom($prenom)
    {
        $this->prénom = $prenom;
    }

    public function getprenom()
    {
        return $this->prénom;
    }

    public function setdatedn($ddn)
    {
        $this->datedenaissance = $ddn;
    }

    public function getdatedn()
    {
        return $this->datedenaissance;
    }

    public function setville($vil)
    {
        $this->ville = $vil;
    }

    public function getville()
    {
        return $this->ville;
    }

    public function setsescomptes($scompt)
    {
        $this->sescomptes[] = $scompt;
    }

    public function getsescomptes()
    {
        return print_r($this->sescomptes);
    }

    public function printoftitulaire()
    {
        echo "Nom: {$this->nom} <br> Prénom : {$this->prénom} <br> Date de nissance : {$this->datedenaissance} <br> 
        Ville : {$this->ville} <br> Comptes : ";
        print_r($this->sescomptes);
        echo "<br>";
        $this->cbo->printofCB();

        // $cb0->printofCB();
        // $this->printofCB();

    }






}


// $cb1 = new CompteBancaire("compte c", 200, "£ euro", "YAB");
// $moi = new Titulaire("Deri", "Mhd", "01/02/1993", "Strasbourg", "Copmte Courant", $cb1);
// // $moi->setsescomptes("lA");
// $moi->printoftitulaire($cb1);

?>