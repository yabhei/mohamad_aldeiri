<?php



class Role
{

    private array $rolfilms; //array of acters by roles
    public function __construct()
    {
        $this->rolfilms = [];
    }

    public function ajouterfilmR($actrole, $actnom)
    {
        $this->rolfilms[$actrole][] = $actnom;
    }




}





?>