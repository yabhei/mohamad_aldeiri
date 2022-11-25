<?php



class Casting
{

    private array $casarr;
    private $casrole;
    private $casactnom;
    public function __construct($crole,$cactn){
        $this->casrole=$crole;
        $this->casactnom=$cactn;
        $this->casarr=[];
    }

    public function getcasrole()
    {
        return $this->casrole;

    }

    public function setcasrole($casr)
    {
        $this->casrole = $casr;

    }

    public function getcasactnom()
    {
        return $this->casactnom;

    }

    public function setcasactnom($casno)
    {
        $this->casactnom = $casno;

    }

    // public function ajouterCasting(){

    // }
    




}





?>