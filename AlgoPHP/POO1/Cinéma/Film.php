<?php
 spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
class Film
{
    public $titre;
    private $datedesortie;
    private $durée;
    private $résumé;
    private $genref;
    private $rolef;
    private array $arrcast;
    public Realisateur $realisateur;
    public Acteur $acteur;
    private Genre $genre;
    private Role $role;
    private Casting $cast;


    public function __construct($tit, $dateds, $dure, $resum, $genref, 
    Realisateur $realis, Acteur $act, Genre $gen, Role $rol)
    {
        $this->titre = $tit;
        $this->datedesortie = $dateds;
        // $time = explode(':', $dure);
        // $min = ($time[0]*60) + ($time[1]) + ($time[2]/60);
        $this->durée = $dure;
        $this->résumé = $resum;
        $this->genref=$genref;
        $this->arrcast=[];
        $this->realisateur=$realis;
        $this->realisateur->ajouterfilmReal($this->titre);
        $this->acteur=$act;
        $this->acteur->ajouterfilmAct($this->titre);
        $this->genre=$gen;
        $this->genre->ajouterfilmGen($this, $genref);
        $this->role=$rol;
        $this->role->ajouterfilmRol();
        // $this->cast=$cas;


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
        return "Titre : " . $this->titre . " <br>Date de sortie : " . $this->datedesortie . "<br> Durée :  " . $this->durée .
         "<br> Genre :  " . $this->genref . "<br> Résumé :  " . $this->résumé;
    }

    public function addcasting(Casting $cast){
        $this->arrcast[]=$cast;
    }    

    public function discasting(){
        $show = "le film ".$this->titre." a été joué par : <br>";
        foreach($this->arrcast as $castel) {
            $show.= $castel->actcast." comme ". $castel->rolecast."<br>";
        }
        return $show;
    }

    
}


?>