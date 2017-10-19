<?php
namespace jdr;

class Presentation{
  public static $magicien = 'Je suis un magicien et je jette des boule de feu ';
  public static $guerrier = 'je suis un guerrier et je vous empale avec mon éppée';
  /*les methodes static appartiennent à la class et non pas à l instance
  oubiez donc le $this et dites bonjour au self::*/
  /*
  *methode static qui affiche le message de Presentation du magicien
  */
  public static function getMagicien(){
    echo self::$magicien;
}
/*
*methode static qui affiche le message de Presentation du guerrier
*/
  public static function getGuerrier(){
  echo self::$guerrier;
}

}
