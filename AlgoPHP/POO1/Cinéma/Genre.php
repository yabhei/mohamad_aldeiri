<?php



class Genre
{

    private array $gfilms; //array of films by genre

    public function ajouterfilmG(Film $ofilm, $type)
    {
        $this->gfilms[$type][] = $ofilm;

    }





}





?>