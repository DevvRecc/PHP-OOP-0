<?php 

// Hier beginnen de classes

class Mens{
    public $naam;
    public $achternaam;
    public $afkomst;
    public $lengte;
}

class Recep extends Mens{
    public $hobby;
    public $opleiding;
}

class Klaas extends Mens{
    public $school;
    public $wijk;
}

// Hier eindigen de classes

// Objecten hier onder

$jongen1 = new Recep();
$jongen1 -> naam = 'Recep'; 
$jongen1 -> achternaam = 'Yildiz';
$jongen1 -> afkomst = 'Turks';
$jongen1 -> lengte = '1.87'; // In meters
$jongen1 -> hobby = 'Boksen';
$jongen1 -> opleiding = 'Software Developer';

$jongen2 = new Klaas();
$jongen2 -> naam = 'Klaas';
$jongen2 -> achternaam = 'Petersen';
$jongen2 -> afkomst = 'Nederlands';
$jongen2 -> lengte = '1.96'; // In meters
$jongen2 -> school = 'ROC Westpoort';
$jongen2 -> wijk = 'Slotervaart';

// Klaar met de objecten

// Jongen 1 hier

echo 'Info Jongen 1'. "<br>". "<br>";
echo 'Naam: ';
echo $jongen1->naam . "<br>";
echo 'Achternaam: ';
echo $jongen1->achternaam . "<br>";
echo 'Afkomst: ';
echo $jongen1->afkomst . "<br>";
echo 'Lengte: ';
echo $jongen1->lengte . "<br>";
echo 'Hobby: ';
echo $jongen1->hobby . "<br>";
echo 'Opleiding: ';
echo $jongen1->opleiding . "<br>". "<br>";

// Jongen 2 hier

echo 'Info Jongen 2'. "<br>". "<br>";
echo 'Naam: ';
echo $jongen2->naam . "<br>";
echo 'Achternaam: ';
echo $jongen2->achternaam . "<br>";
echo 'Afkomst: ';
echo $jongen2->afkomst . "<br>";
echo 'Lengte: ';
echo $jongen2->lengte . "<br>";
echo 'School: ';
echo $jongen2->school . "<br>";
echo 'Wijk: ';
echo $jongen2->wijk;


?>


