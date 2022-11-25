<?php



class Genre
{
    private $filmgen;
    private array $gfilms; //array of films by genre
    public function __construct($fg){
        $this->filmgen=$fg;
        $this->gfilms=[];
    }

    public function ajouterfilmGen(Film $ofilm, $type)
    {
        $this->gfilms[$type][] = $ofilm;

    }

    public function ListebyGenre(){
        foreach($this->gfilms as $kfilmgen){
            echo "le genre ".$this->filmgen." est associé à ".count($kfilmgen)." films : <br> <br>";
            foreach($kfilmgen as $vfilmgen){
                echo $vfilmgen."<br> <br>";
            }
        }
    
    }





}





?>