<?php
/*
Een klasse is een sjabloon voor objecten en een object is een instantie van een klasse.
*/

class klasseNaam {
    // doe maar wat
}

class Fruit {
    // Properties
    public $name;
    public $color;
    private $ding ;
    protected $ookding ;

  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }