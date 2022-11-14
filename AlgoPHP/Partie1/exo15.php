<?php

class Personne
{

    public $nom;
    public $prénome;
    public $datedenaissance;

    public function __construct($nom, $pré, $ddn)
    {
        $this->nom = $nom;
        $this->prénome = $pré;
        $this->datedenaissance = $ddn;
    }

    public function getAge($dat) {
       
        $dob = new DateTime($dat);
        $now = new DateTime();
        $diff = $now->diff($dob);
        return $diff->y;
        
    }

    public function printo()
    {

        echo $this->nom . " {$this->prénome} a " . $this->getAge($this->datedenaissance) . " ans ";
    }




}
$user1 = new Personne("AL DERI", "mhd", "02/01/1993");
$user2 = new Personne("NEMER", "Abood", "01/25/1996");

echo $user1->printo() . "<br>";
echo $user2->printo();





?>