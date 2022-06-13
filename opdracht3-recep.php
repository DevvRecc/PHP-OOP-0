<?php

class Product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
} 

$dweil = new Product();
$stofzuiger = new Product();

$dweil->merk='hema';
$dweil->prijs='10';
$dweil->type='lang';
$dweil->kleur='rood';

$stofzuiger->merk='aegon' ;
$stofzuiger->prijs='50' ;
$stofzuiger->type='gfs505' ;
$stofzuiger-> kleur='grijs';

echo 'Dweil' . '<br>' . '<br>';
echo 'Merk: ';
echo $dweil->merk . '<br>';
echo 'Prijs: ';
echo $dweil->prijs . '<br>';
echo 'Type: ';
echo $dweil->type . '<br>';
echo 'Kleur: ';
echo $dweil->kleur . '<br>';

echo '<br>';

echo 'Stofzuiger' . '<br>' . '<br>';
echo 'Merk: ';
echo $stofzuiger->merk . '<br>';
echo 'Prijs: ';
echo $stofzuiger->prijs . '<br>';
echo 'Type: ';
echo $stofzuiger->type . '<br>';
echo 'Kleur: ';
echo $stofzuiger->kleur;


?>