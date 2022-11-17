<?php


class Auteur
{

    private $nom;
    private $prenom;
   


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
   
 

}


?>