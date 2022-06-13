<?php 

class Auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}

$nieuweAuto = new Auto();
$nieuweAuto->merk = 'Volkswagen';
$nieuweAuto->kleur = 'rood';
$nieuweAuto->type = 'Golf';
$nieuweAuto->uitvoering = 'station';
$nieuweAuto->brandstof = 'benzine';

echo "Merk: ";
echo $nieuweAuto->merk .'<br>';
echo "Kleur: ";
echo $nieuweAuto->kleur .'<br>';
echo "Type: ";
echo $nieuweAuto->type .'<br>';
echo "Uitvoering: ";
echo $nieuweAuto->uitvoering .'<br>';
echo "Brandstof: ";
echo $nieuweAuto->brandstof;

?>