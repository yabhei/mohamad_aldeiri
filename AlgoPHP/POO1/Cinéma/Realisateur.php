<?php



class Realisateur extends Personne
{

    private array $rfilms;

    public function __construct($rnom, $rpre, $rsexe, $rdden)
    {
        parent::__construct($rnom, $rpre, $rsexe, $rdden);
        $this->rfilms = [];
    }
    public function ajouterfilmReal($flm)
    {
        $this->rfilms[] = $flm;

    }

    public function ListefilmofReal(){
        echo "The films of the director ".$this->nom ." ".$this->prénom." are : <br>";
        foreach($this->rfilms as $filreal){
           echo $filreal."</br>";
           }
        
        }



}





?>