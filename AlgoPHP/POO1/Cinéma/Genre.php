<?php



class Genre
{
    // private $filmgen;
    private array $gfilms; //array of films by genre
    public function __construct($fg){
        $this->filmgen=$fg;
        $this->gfilms=[];
    }

    public function ajouterfilmGen(Film $ofilm, $type)
    {
        $this->gfilms[$type][] = $ofilm;

    }





}





?>