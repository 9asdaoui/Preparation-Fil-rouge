<?php

class Voiture 
{
              public string $marque;

              public function __construct()
              {
                            echo "La voiture démarre";
              }
}

class CompteBancaire 
{
              public int $solde;
              
              public function __construct()
              {
                            $this->solde = 0;
              }

              public function deposer($montant)
              {
                            $this->solde = $this->solde + $montant;
              }

              public function retirer($montant)
              {
                            if($this->solde >= $montant){
                                          $this->solde = $this->solde - $montant;
                            }else{
                                          echo 'not enough solde';
                            }
              }

}

// $account = new CompteBancaire();
// $account->deposer(100);
// $account->retirer(50);
// echo $account->solde;

class Etudiant 
{
              public $name;
              public $notes = [];

              public function moyenne()
              {
                            if (empty($this->notes)) {
                                          return 0; 
                            }
                            
                            $total = 0;
                            foreach ($this->notes as $note) {
                                          $total += $note;
                            }
                            
                            return $total / count($this->notes);
              }
}

class Rectangle 
{
              public $longueur;
              public $largeur;
              
              public function air(){
                            return $this->longueur * $this->largeur;
              }

              public function perimetre(){
                            return 2 * ($this->longueur + $this->largeur);
              }

              public function estCarre(){
                            return $this->longueur == $this->largeur;
              }
              
}

class Personne 
{
              public $nom;
              public $anniversaire;
              public $age;

              public function anniversaire()
              {
                            $this->age++;
              }

}