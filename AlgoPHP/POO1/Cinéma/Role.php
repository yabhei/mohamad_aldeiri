<?php



class Role
{
    private $roleR;
    private $nomActR;
    private array $rolfilms; //array of acters by roles
    public function __construct($rol,$act)
    {
        $this->roleR=$rol;
        $this->nomActR=$act;
         $this->rolfilms=[];
    }

    public function getroleR()
    {
        return $this->roleR;

    }

    public function setroleandAct($rl,$ac)
    {
        $this->roleR = $rl;
        $this->nomActR=$ac;

    }

    public function getnomActR()
    {
        return $this->nomActR;

    }

    



    // $addrole,$addact
    public function ajouterfilmRol()
    {
        $this->rolfilms[$this->roleR][] = $this->nomActR;
    }

    public function ListeofRole(){
        foreach($this->rolfilms as $krols => $rols){
            echo "The role ".$krols." played by : <br>";
           foreach($this->rolfilms[$krols] as $vrol){
            echo $vrol."<br>";
           }
        
        }
    }


}




?>