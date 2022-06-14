<?php

//lamp properties
class lamp{
    public $kleur;
    public $helderheid;
    public $isAan;

    public function setStatus($status){
        $this->isAan = $status;
    }
}

// OBJECT 1

    $woonkamerLamp = new lamp();
    $woonkamerLamp->kleur = "Rood";
    $woonkamerLamp->helderheid = "Zacht";
    $woonkamerLamp->setStatus('Aan');

echo "Lamp 1". "<br>". "<br>";
echo "Kleur: ";
echo $woonkamerLamp->kleur. "<br>";
echo "Helderheid: ";
echo $woonkamerLamp->helderheid. "<br>";
echo "Status: ";
echo $woonkamerLamp->isAan. "<br>". "<br>";


// OBJECT 2

    $keukenLamp = new lamp();
    $keukenLamp->kleur = "Zwart";
    $keukenLamp->helderheid = "Vel";

echo "Lamp 2". "<br>". "<br>";
echo "Kleur: ";
echo $keukenLamp->kleur. "<br>";
echo "Helderheid: ";
echo $keukenLamp->helderheid. "<br>";
echo "Status: ";
// echo $keukenLamp->setStatus(). "<br>";

?>