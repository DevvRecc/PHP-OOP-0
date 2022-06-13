<?php

//lamp properties
class lamp{
    public $kleur;
    public $helderheid;
    public $isAan;

    public function setStatus($status){
        if ($this->isAan == "aan"){
            echo "De lamp staat aan"."<br>";
        }else{
            echo "Uit, damn you broke?";
        }
    }
}

// OBJECT 1

    $woonkamerLamp = new lamp();
    $woonkamerLamp->kleur = "Rood";
    $woonkamerLamp->helderheid = "Zacht";
    $woonkamerLamp->isAan = "aan";

echo "Lamp 1". "<br>". "<br>";
echo "Kleur: ";
echo $woonkamerLamp->kleur. "<br>";
echo "Helderheid: ";
echo $woonkamerLamp->helderheid. "<br>";
echo "Aan of Uit: ";
echo $woonkamerLamp->setStatus("aan"). "<br>";


// OBJECT 2

    $keukenLamp = new lamp();
    $keukenLamp->kleur = "Zwart";
    $keukenLamp->helderheid = "Vel";

echo "Lamp 2". "<br>". "<br>";
echo "Kleur: ";
echo $keukenLamp->kleur. "<br>";
echo "Helderheid: ";
echo $keukenLamp->helderheid. "<br>";
echo "Aan of Uit: ";
echo $keukenLamp->setStatus(""). "<br>";

