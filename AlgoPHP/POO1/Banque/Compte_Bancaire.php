<?php

class CompteBancaire
{

    private $libellé;
    private $solde_init;
    private $devise;
    private $titulaire;

    public function __construct($libl,$solde,$dev,$titu){

        $this->libellé = $libl;
        $this->solde_init = $solde;
        $this->devise = $dev;
        $this->titulaire = $titu;

    }

    public function setlibelle($lib){
        $this->libellé = $lib;
    }

    public function getlibelle(){
        return $this->libellé;
    }

    public function setsoldeinit($sol){
        $this->solde_init = $sol;
    }

    public function getsoldeinit(){
        return $this->solde_init;
    }

    public function setdevise($devi){
        $this->devise = $devi;
    }

    public function getdevise(){
        return $this->devise;
    }

    public function settitulaire($tit){
        $this->titulaire = $tit;
    }

    public function gettitulaire(){
        return $this->titulaire;
    }





}


?>