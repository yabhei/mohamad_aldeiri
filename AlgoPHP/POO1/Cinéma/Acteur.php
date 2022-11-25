<?php

class Acteur extends Personne
{

    private array $actinfilms;
    private array $arrcast;


    public function __construct($actnom, $actpre, $actsexe, $actdden)
    {
   
        parent::__construct($actnom, $actpre, $actsexe, $actdden);
        $this->actinfilms = [];
        $this->arrcast=[];
    }

    public function getactor(){
        return $this;
    }



    public function ajouterfilmAct($flm)
    {
        $this->actinfilms[] = $flm;

    }

    public function addcasting(Casting $cast){
        $this->arrcast[]=$cast;
    }    



    public function __toString()
    {
        return $this->nom." ".$this->prénom;
    }


        public function discasting(){
            $show = "l'acteur".$this." a joué dans : <br>";
            foreach($this->arrcast as $castel) {
                $show.= $castel->filmcast->titre." Comme : ".$castel->rolecast->roleR."<br>";
            }
            echo $show;
        }

    public function ListefilmofAct(){
        echo "The films of the actor ".$this->nom." ".$this->prénom." are : <br>";
        foreach($this->actinfilms as $filact){
           echo $filact."</br>";
           }
        
        }




    }









?>