<?php

class Animal  
{
              public $name; 

              public function __construct($name)
              {
                            $this->name = $name;                           
              }

              public function parler() 
              {
                            return 'Lanimal fait un son';
              }
}

$maLion  = new Animal("Lion");
$maChat  = new Animal("Chat");


// echo $maChat->name .' <br> '.$maLion->name;

// echo ' <br> '. $maChat->parler();


class Rectangle 
{
              public   $longueur; 
              public   $largeur;

              public function __construct($longueur,$largeur)
              {
                            $this->longueur = $longueur;
                            $this->largeur = $largeur;
              }

              public function aire()
              {
                            $result = $this->longueur * $this->largeur;
                            return $result;
              }
}

$result = new Rectangle(12,45); 
echo $result->aire();