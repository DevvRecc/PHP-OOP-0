<?php 

// Class hier

class Scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;

    // Function maken hier

    public function checkTank(){
        if($this->inhoudTank == 7){
            echo 'Volle tank!';
        }
    else{
        echo 'Haha! Ga je tank vullen!';
        }
    }
}

// Objecten

$piagio = new Scooter();
$piagio -> kleur = 'Rood';
$piagio -> merk = 'Piago';
$piagio -> inhoudTank = 6;

// Nog een object

$peugeot = new Scooter();
$peugeot -> kleur = 'Zwart';
$peugeot -> merk = 'Peugeot';
$peugeot -> inhoudTank = 7;

// Eind objecten

// Piagio hier

echo 'Scooter 1'. "<br>". "<br>";
echo 'Merk: ';
echo $piagio->merk . "<br>";
echo 'Kleur: ';
echo $piagio->kleur. "<br>";
echo 'Inhoud: ';
echo $piagio->inhoudTank. "<br>";
echo $piagio->checkTank(). "<br>". "<br>";

// // Peugeot hier
echo 'Scooter 2'. "<br>". "<br>";
echo 'Merk: ';
echo $peugeot->merk . "<br>";
echo 'Kleur: ';
echo $peugeot->kleur. "<br>";
echo 'Inhoud: ';
echo $peugeot->inhoudTank. "<br>";
echo $peugeot->checkTank();

?>