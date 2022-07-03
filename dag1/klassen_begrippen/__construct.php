<?php
/*
Met een constructor kunt u de eigenschappen van een object initialiseren bij het maken van het object.
Als je een functie __construct() maakt, zal PHP deze functie automatisch aanroepen wanneer je een object van een klasse maakt.
*/

class Fruit {
    private $name;
    public $color;
    # __construct wordt aangeroepen wanneer de klasse wordt gebruikt
    function __construct($name = '') {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  # je gebruikt (instantieert) een klasse met 'new'
$apple = new Fruit("apple");
echo $apple->get_name();
// $apple->name = "Goudranet" ;
// echo $apple->name;