<?php

class Voiture 
{
              public $marque; 
}

$maVoiture  = new Voiture();

$name = $maVoiture->marque = "hello";

echo $name;