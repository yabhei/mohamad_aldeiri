<?php



class Role
{
    public $roleR;
    private $nomActR;
    private $rolefilm;
    private array $arrcast;
    private array $rolfilms; //array of acters by roles
    public function __construct($rol, $act)
    {
        $this->roleR = $rol;
        $this->nomActR = $act;
        $this->rolfilms = [];
        $this->arrcast = [];
    }

    public function getroleR()
    {
        return $this->roleR;

    }

    public function setroleandAct($rl, $ac)
    {
        $this->roleR = $rl;
        $this->nomActR = $ac;

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

    public function ListeofRole()
    {
        foreach ($this->rolfilms as $krols => $rols) {
            echo "The role " . $krols . " played by : <br>";
            foreach ($this->rolfilms[$krols] as $vrol) {
                echo $vrol . "<br>";
            }

        }
    }


    public function addcasting(Casting $cast)
    {
        $this->arrcast[] = $cast;
    }

    public function discasting()
    {
        $show = "le role " . $this . " a été joué par : <br>";
        foreach ($this->arrcast as $castel) {
            $show .= $castel->actcast . " dans " . $castel->filmcast->titre . "<br>";
        }
        return $show;
    }


}




?>