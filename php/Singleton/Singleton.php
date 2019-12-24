<?php


class Singleton {

 private static $_instance = null ; 


 private function __construct () {
    // self::$_instance=Singleton::getInstance();
     echo  "je suis l'instance num ". uniqid();
 }


 public  static function getInstance(){
        if(self::$_instance == null){
            self::$_instance = new Singleton();
        }
        return self::$_instance;
 }

}