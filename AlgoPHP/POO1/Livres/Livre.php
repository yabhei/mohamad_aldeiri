<?php


class Livre
{

    private $titre;
    private $nombredepages;
    private $parution;
    private $prix;
    private $auteur;


    public function settitre($ti){
            $this->titre = $ti;
    }
    public function setnombredepages($ndp){
        $this->nombredepages = $ndp;
    }
    public function setparution($par){
    $this->parution = $par;
    }
    public function setprix($pr){
    $this->prix = $pr;
    }
    public function setauteur($aut){
    $this->auteur = $aut;
    }


    public function gettitre(){
        return $this->titre;
    }
    public function getnombredepages(){
        return $this->nombredepages;
    }
    public function getparution(){
        return $this->parution;
    }
    public function getprix(){
        return $this->prix;
    }
    public function getauteur(){
        return $this->auteur;
    }
    
 


}


?>