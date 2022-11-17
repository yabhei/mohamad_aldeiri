<?php

// require "Livre.php";

class Auteur
{

    private $nom;
    private $prenom;

    public  $livres =array();

    public function __construct($nnm,$prr)
    {
        $this->nom=$nnm;
        $this->prenom=$prr;
        $this->livres=[];
    }
   


    public function setnom($no){
            $this->nom = $no;
    }
    public function setprenom($pre){
        $this->prenom = $pre;
    }
    


    public function getnom(){
        return $this->nom;
    }
    public function getprenom(){
        return $this->prenom;
    }


    public function __toString(){
        return $this->nom. " ". $this->prenom;
    }

    public function  afficherBibliographie(){
        echo $this->nom." ". $this->prenom;
    }
   
 

}


$k = new Auteur("king","andari");
$k->afficherBibliographie();


?>