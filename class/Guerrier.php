<?php
namespace jdr;
/**
 *la class Guerrier hérite de la class mére Personnage
 */
class Guerrier extends Personnage{
  private static $maxLife = 80;
  public $life = 80;
  public $attack = 10;
  public $sword = 25;
  public $strength = 20;
  public $intelligence = 5;
  public $shout ="";
  public $heal = 35;
  public $name;
  public $target;
/**
* methode yell affiche le cri du guérrier
*/
  public function yell(){
    $shout= "EN PLEIN DANS SA MOUILLE!!!";
    echo $shout;
  }
  /*
  *methode qui permet au personnage de recupérer de la vie
  */
  public function regenerated(){
    if ($this->life < self::$maxLife) {
      $this->life += $this->heal;
  }else {
    echo "pourquoi boire une potion si tu es encore en forme???";
  }
}
  /**
  *methode handOfGod permet au guerrier de frapper sa cible
  *on impute de la vie de la cible la puissance de l'eppée + la force
  */
  public function handOfGod($target){
      $target->life -= $this->sword + $this->strength;
  }

}
