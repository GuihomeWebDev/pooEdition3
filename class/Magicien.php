<?php
namespace jdr;
/**
 *class Magicien qui herite de la class Personnage
 */
class Magicien extends Personnage{
  public static $maxLife = 50;
  public $life = 50;
  public $magic = 100;
  public $attack = 10;
  public $fireBall =40;
  public $strength = 10;
  public $intelligence = 20;
  public $shout ="";
  public $heal = 25;
  public $name;
  public $target;

// methode qui affiche le cri du magicien
  public function yell(){
    $shout= "VOUS NE PASSERAIS PAS...";
    echo $shout;
  }
  //methode qui permet d'envoyer des boules de feu
  public function spell($target){
    if ($this->magic >= $this->fireBall) {
      $this->magic -= $this->fireBall;
      $target->life -= $this->fireBall + $this->intelligence;
    }else {
      echo "Vous n avez plus assez de point de magie";
    }
  }
    /*
    *methode qui permet au personnage de recupérer de la vie
    */
    public function regenerated(){
      if ($this->life < self::$maxLife) {
        $this->life += $this->heal;
    }else {
      echo "le sort ne fonctionne pas vous êtes encore en forme!!";
    }
  }
}
