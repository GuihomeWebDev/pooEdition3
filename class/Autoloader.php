<?php
namespace jdr;
/**
 *la class Autoloader permet grace à 2 méthodes de charger automatiquement mes class
 */
class Autoloader {
  /*
  *la methode register permet de lancer la methode autoload
  *elle prend en parametre du tableau le nom de la class suivi du nom de la methode
  */
  public static function register(){
    spl_autoload_register(array(__CLASS__, 'autoload'));
  }
  /*
  *la methode autoload charge mes class en suivant le chemin dossier/nom de la class/extension_loaded
  * ce qui me permet de charger automatiquement mes class lors de l'instanciation.
  */
  public static function autoload($class){
    $class = str_replace(__NAMESPACE__. '\\','', $class);
    $class = str_replace('\\','/', $class);
    require 'class/'.$class.'.php';    
  }
}
