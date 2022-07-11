<?php
class Input {
    private $geraden = false;
    private $taal = 'nl';
    public function __construct() {
        if(isset($_POST['getal']) && is_numeric($_POST['getal'])) {
            $this->geraden = (int)$_POST['getal'];
        }
        if(isset($_POST['taal']) && ($_POST['taal'] =='nl' || $_POST['taal'] =='en')){
            $this->taal = $_POST['taal'];
        }
    }
    public function __get($name)
    {
        return $this->$name ;
    }
}