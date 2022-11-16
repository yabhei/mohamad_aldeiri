<?php

// require "Compte_Bancaire.php";
class Titulaire
{
    public $nom;
    public $prénom;
    private $datedenaissance;
    private $ville;
    public array $sescomptes;



    public function __construct($nom, $pre, $datedn, $ville)
    {
        // parent::__construct($libt, $solt, $devt, $titunique);

        $this->nom = $nom;
        $this->prénom = $pre;
        $this->datedenaissance = $datedn;
        $this->ville = $ville;
        $this->sescomptes = [];

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

    public function age($strdate)
    {
        $obd = new DateTime($strdate);
        $otod = new DateTime();
        $diff = $otod->diff($obd);
        return $diff->y;
    }

    public function printoftitulaire()
    {
        echo "Nom: {$this->nom} <br> 
        Prénom : {$this->prénom} <br> 
        Date de nissance : " . $this->age($this->datedenaissance) . " <br> 
        Ville : {$this->ville} <br> Comptes : ";
        print_r($this->sescomptes);
        echo "<br>";

    }






}


// $cb1 = new CompteBancaire("compte c", 200, "£ euro", "YAB");
// $moi = new Titulaire("Deri", "Mhd", "01/02/1993", "Strasbourg", "Copmte Courant", $cb1);
// // $moi->setsescomptes("lA");
// $moi->printoftitulaire($cb1);

?>