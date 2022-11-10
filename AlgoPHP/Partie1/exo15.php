<?php

class personne
{

    public $nom;
    public $prénome;
    public $age;

    public function __construct($nom, $pré, $age)
    {
        $this->nom = $nom;
        $this->prénome = $pré;
        $this->age = $age;
    }

    public function printo()
    {

        echo $this->nom . " " . $this->prénome . " a " . $this->age . " ans ";
    }




}
$user1 = new personne("DERI", "mhd", 29);
$user2 = new personne("NEMER", "Abood", 26);

echo $user1->printo() . "<br>";
echo $user2->printo();





?>