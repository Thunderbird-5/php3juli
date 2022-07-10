<?php

class Lang {
    private $tekst ;
    private $lang ;
    public function __construct($teksten, $lang = 'nl')
    {   
        foreach ($teksten[$lang] as $key => $value) {
            $this->tekst[$key] = $value ;
        }
    }
    public function output($key){
        if(!key_exists($key, $this->tekst)){
            return "Tekst voor '$key' is er niet." ;
        } else {
            return $this->tekst[$key] ;
        }
    }

}