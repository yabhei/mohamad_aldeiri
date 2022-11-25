<?php
 spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obrol1 = new Role("Batman","joakin");
$obreal1= new Realisateur("Ma","Ba3rf","H","01/02/1975");
$obact1= new Acteur("Mhd","Der","H","04/07/1980");
$obgen1= new Genre("SuperHeros");
$obcast1= new Casting("Batman","Mhd");
$obfilm1= new Film("Dark knight",2018,120,"an Super hero has to save the city",
"SuperHeros",$obreal1,$obact1,$obgen1,$obrol1,$obcast1);

$obfilm2= new Film("Love,Rosie",2018,120,"an Super hero has to save the city",
"SuperHeros",$obreal1,$obact1,$obgen1,$obrol1,$obcast1);

$obrol1->ListeofRole();
$obrol1->setroleandAct("Batman","Mathieu");
$obrol1->ajouterfilmRol();
$obrol1->ListeofRole();

$obact1->ListefilmofAct();


?>