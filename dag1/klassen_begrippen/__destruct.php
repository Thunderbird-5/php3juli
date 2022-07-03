<?php
/*
Een destructor wordt aangeroepen wanneer het object wordt vernietigd of het script wordt gestopt of afgesloten.
Als u een functie __destruct() maakt, roept PHP deze functie automatisch aan het einde van het script aan.
*/
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
    echo "The fruit is {$this->name}.";
  }
  # destruct wordt uitgevoerd wanneer php het object vernietigt (destructs) (bv aan het einde van het programma)
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");
