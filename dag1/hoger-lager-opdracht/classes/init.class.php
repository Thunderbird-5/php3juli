<?php
class Init {
    private $i_laagste ;
    private $i_hoogste ;
    private $i_teRaden ;
    public function __construct(){
        session_start();
        // is het spel al bezig? Ja -> haal te raden getal op
    }
    public function __get($name) 
    {
        return $this->$name ;
    }

}