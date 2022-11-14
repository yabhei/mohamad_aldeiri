<?php

class Voiture {

    public $marque ;
    public $modele;
    public $nbPortes;
    public $vitesseActuelle=0;
    public $flag = false;


    public function __construct($mque,$mod,$nbp) {
        $this->marque = $mque;
        $this->modele= $mod;
        $this->nbPortes= $nbp;
        // $this->vitesseActuelle= $vitesse;
    }

    public function demarrer(){
        $this->flag = true;
        echo "Le véhicule ".$this->marque." démarrre <br>";
    }

    public function accelerer($acc){
        if($this->flag == true){
        $this->vitesseActuelle=$this->vitesseActuelle + $acc;
        echo "Le véhicule ".$this->marque." accélère de ".$this->vitesseActuelle." km/h <br>";
        } else{
            echo "Pour accélerer, il faut démarrer le vihécule ".$this->marque." !<br>";
        }
    }

    public function stopper(){
        $this->vitesseActuelle=0;
        $this->flag=false;
        echo "Le véhicule ".$this->marque." est stoppé <br>";
    }

    public function ralentir($vit){
        $this->vitesseActuelle = $this->vitesseActuelle - $vit;
        
    }


    public function setvitesse($vitesse){
        $this->vitesseActuelle=$vitesse;
    }

    public function getvitesse(){
        return "La vitesse du vihécule ".$this->marque." ".$this->modele." est de : ".$this->vitesseActuelle." km/h <br>";
    }

    public function printinfo(){
        echo "<br> <br> Info véhicule ".$this->marque." : <br>";
        echo "***************** <br>";
        echo "Nome et Modéle du véhicule : ".$this->marque." ".$this->modele."<br>";
        echo "Nombre de porte : ".$this->nbPortes."<br>";
        if($this->flag == true || $this->vitesseActuelle > 0){
            echo "Le véhicule ".$this->marque." est démarré <br>";
        }else{
            echo "Le véhicule ".$this->marque." est à l'arrêt <br>";
        }

        echo "Sa vitesse actuelle est de : ".$this->vitesseActuelle." km/h <br>";
    }

}

$v1 = new Voiture("Peugeot","408",5);
$v1->setvitesse(50);
$v1->printinfo();
$v1->demarrer();
echo $v1->getvitesse();
$v1->ralentir(20);
$v1->getvitesse();

$v2 = new Voiture("Citroën","c4",3);
$v2->printinfo();
$v2->accelerer(20);
$v2->demarrer();
$v2->accelerer(20);
$v2->stopper();
echo $v2->getvitesse();



?>