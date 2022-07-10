<?php
class Init {
    private $i_laagste ;
    private $i_hoogste ;
    private $i_teRaden ;
    private $b_isBezig ;
    public function __construct($laagste, $hoogste){
        session_start();
        // stel de laagste en hoogste getallen in
        $this->i_laagste = $laagste;
        $this->i_hoogste = $hoogste;
        // is het spel al bezig? Ja -> haal te raden getal op
        if(isset($_SESSION['b_isBezig']) && $_SESSION['b_isBezig']){
            $this->i_teRaden = $_SESSION['i_teRaden'] ; 
            $this->b_isBezig = true ;
        }
        // het spel is niet bezig, dus nieuw getal aanmaken?
        else {
            $this->i_teRaden = $_SESSION['i_teRaden'] = random_int($this->i_laagste,$this->i_hoogste) ;
            $this->b_isBezig = $_SESSION['b_isBezig'] = true ;
        }
    }
    public function __get($name) 
    {   
        return $this->$name ;
    }
    public function __set($name, $value)
    {   if($name == 'laagste'AND is_int($value)){
            $this->i_laagste = $value ;
        };
        if($name == 'hoogste'AND is_int($value)){
            $this->i_hoogste = $value ;
        };
    }
}