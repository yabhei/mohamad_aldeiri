<?php
 spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obrol1 = new Role("Batman","joaquin");
$obreal1= new Realisateur("Ma","Ba3rf","H","01/02/1975");
$obact1= new Acteur("Mhd","Der","H","04/07/1980");
$obgen1= new Genre("SuperHeros");
// $obcast1= new Casting("Batman","Mhd");

$obfilm1= new Film("Dark knight",2018,120,"an Super hero has to save the city",
"SuperHeros",$obreal1,$obact1,$obgen1,$obrol1);

$obrol2 = new Role("Boyfriend","Tomas");
$obreal2= new Realisateur("John","Medry","H","01/02/1975");
$obact2= new Acteur("Tomas","Tommy","H","04/07/1980");
$obgen2= new Genre("Romance");


$obfilm2= new Film("Love,Rosie",2019,90,"Love story bitween two friends",
"Romance",$obreal2,$obact2,$obgen2,$obrol2);

// $obgen3= new Genre("SuperHeros");

$obfilm3= new Film("Star Wars",1990,180,"fight in the space",
"SuperHeros",$obreal2,$obact1,$obgen1,$obrol2);

$obcast1= new Casting($obrol1,$obact1,$obfilm1);
$obcast2= new Casting($obrol2,$obact1,$obfilm3);

$obcast1->displayallcasting();
$obact1->discasting();




// $obgen1->ListebyGenre();
// echo "<br/>";
// $obreal1->ListefilmofReal();
// echo "<br/>";
// $obact1->ListefilmofAct();
// echo "<br/>";
// $obrol1->setroleandAct("Batman","Mathieu");
// $obrol1->ajouterfilmRol();echo "<br/>";
// $obrol1->ListeofRole();echo "<br/>";



// $obgen2->ListebyGenre();
// echo "<br/>";
// $obreal2->ListefilmofReal();
// echo "<br/>";
// $obact2->ListefilmofAct();
// echo "<br/>";
// $obrol2->ListeofRole();


?>