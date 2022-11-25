<?php



class Realisateur extends Personne
{

    private array $rfilms;

    public function __construct($rnom, $rpre, $rsexe, $rdden)
    {
        parent::__construct($rnom, $rpre, $rsexe, $rdden);
        $this->rfilms = [];
    }
    public function ajouterfilmReal(Film $flm)
    {
        $this->rfilms[] = $flm;

    }


}





?>