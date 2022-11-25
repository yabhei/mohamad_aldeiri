<?php



class Casting
{

 
    public Film $filmcast;
    public Acteur $actcast;
    public Role $rolecast;

    public function __construct($casrole,$casact,$casfilm){
        $this->filmcast=$casfilm;
        $casact->addcasting($this);
        $this->actcast=$casact;
        $casfilm->addcasting($this);
        $this->rolecast=$casrole;
        $casrole->addcasting($this);
    }

    public function __toString(){
       return $this->actcast." ".$this->filmcast." ".$this->rolecast; 
    }

    public function displayallcasting(){
        echo $this->actcast." a joué dans ".$this->filmcast->titre." comme ".$this->rolecast->roleR." <br>";

    }











    // public function getcasrole()
    // {
    //     return $this->casrole;

    // }

    // public function setcasrole($casr)
    // {
    //     $this->casrole = $casr;

    // }

    // public function getcasactnom()
    // {
    //     return $this->casactnom;

    // }

    // public function setcasactnom($casno)
    // {
    //     $this->casactnom = $casno;

    // }

   
    




}





?>