<?php

require "Auteur.php";
class Livre
{

    private $titre;
    private $nombredepages;
    private $parution;
    private $prix;
    private Auteur $auteur;


    public function __construct($tit,$nmdp,$paru,$pri,$au)
    {

        $this->titre=$tit;
        $this->nombredepages=$nmdp;
        $this->parution=$paru;
        $this->prix=$pri;
        $this->auteur=$au;

        
    }


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