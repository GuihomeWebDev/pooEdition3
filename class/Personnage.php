<?php
namespace jdr;
/*
*class mère qui ne peut etre instancier!!!!!!!
*/
abstract class Personnage{
  /*
  *methode qui permet de passer le nom du personnage en parametre lors de l instanciation
  */
  public function __construct($name){
    $this->name = $name;
  }
/*
*methode abstraite à definir dans les class filles qui permet au personnage de recupérer de la vie
*/
abstract public function regenerated();
/*
*methode abstraite à definir dans les class filles qui permet au personnage de crier
*/
abstract public function yell();
/*
*methode qui permet de savoir si un personnage est mort ou vivant
*/
public function death(){
  if ($this->life <= 0) {
    echo $this->name . " est mort";
  }else {
    echo $this->name . " est vivant et il lui reste" ." ". $this->life . " "."points de vie";
  }
}
/*
*methode qui permet de frapper avec ses poings(degats de merde
*mais les differentes class ont en plus une attaque spéciale de class)
*/
public function punch($target){
$target->life -= $this->attack;
}
}
