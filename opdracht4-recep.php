<?php 

class Computer{
    public $merk;
    public $hdd_capacity;
    public $memory;
}

$nieuweComputer = new Computer();
$nieuweComputer->merk = 'Acer Predator';
$nieuweComputer->hdd_capacity = 'HDD 512 gb';
$nieuweComputer->memory = '16 gb';

echo 'Acer Gaming PC'. '<br>' . '<br>';
echo 'Merk: ';
echo $nieuweComputer->merk . '<br>';
echo 'Opslag: ';
echo $nieuweComputer->hdd_capacity . '<br>';
echo 'Memory: ';
echo $nieuweComputer->memory;

?>