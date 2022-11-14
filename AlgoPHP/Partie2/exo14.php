<?php

class Voiture{
    public $marque;
    public $modele;

    public function __construct($mrq,$mod){
        $this->marque = $mrq;
        $this->modele= $mod;
    }
    public function getInfos(){
         return "Le voiture classique : <br>*********<br>Nome et Modéle : ".$this->marque." ".$this->modele." <br>";

    }
}

class VoitureElec extends Voiture{

    public $autonomie;
    public function __construct($mrqe,$mode,$auto){
        parent::__construct($mrqe, $mode);
        $this->autonomie= $auto;
    }

    public function getInfos(){
        return "<br>Le voiture électrique : <br>*********<br>Nome , Modéle : ".$this->marque." ".$this->modele." <br> Autonomie : ".$this->autonomie."<br>";

   }

}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","i3",100);

echo $v1->getInfos();
echo $ve1->getInfos();


?>