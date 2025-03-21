<?php

class Personne 
{
              public string $name;
              public int $age;


              public function __construct($name,$age)
              {
                          $this->name = $name;
                          $this->age = $age; 
              }


              public function info()
              {
                            echo '<h1>'.$this->name.' '.$this->age.'</h1>';
              }

              public function saluer()
              {
                            echo '<h1> Bonjour, je m appelle '. $this->name .' </h1>';
              }
}


$personne = new Personne("oussama",13);

$Alice = new Personne("Alice",25);
$Bob = new Personne("Bob",30);


$Alice->info();
$Bob->saluer();

