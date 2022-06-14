<?php

// ROBOT CLASS

class robot {
    private $naam;
    private $geluid;
    private $voortstuwing;

    public function getSound(){
        if($this->geluid == true){
            return $this->geluid;
        }
    }

    // Function 1

	public function setName($name)
	{
		$this->naam = $name;
	}

	public function getName()
	{
		return $this->naam;
	}

     // Function 2

     public function setGeluid($sound)
     {
         $this->geluid = $sound;
     }
 
     public function getGeluid()
     {
         return $this->geluid;
     }

     // Function 3

     public function setVoort($voort)
     {
         $this->voortstuwing = $voort;
     }
 
     public function getVoort()
     {
         return $this->voortstuwing;
     }
}

// OBJECT WALLY

$wally = new robot ();
$wally-> setName('Wally');
$wally-> setGeluid("Klik");
$wally-> setVoort("Vliegend");
echo "Robot 1". "<br>". "<br>";
echo "Naam: ";
echo $wally->getName(). "<br>";
echo "Geluid: ";
echo $wally->getGeluid(). "<br>";
echo "Voortstuwing: ";
echo $wally->getVoort(). "<br>". "<br>";

// OBJECT WOLLY

$wolly = new robot ();
$wolly-> setName('Wolly');
$wolly-> setGeluid("Klak");
$wolly-> setVoort("Jumpend");
echo "Robot 2". "<br>". "<br>";
echo "Naam: ";
echo $wolly->getName(). "<br>";
echo "Geluid: ";
echo $wolly->getGeluid(). "<br>";
echo "Voortstuwing: ";
echo $wolly->getVoort(). "<br>";


?> 