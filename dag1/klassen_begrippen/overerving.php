<?php
/*
Overerving in OOP = Wanneer een klasse voortkomt uit een andere klasse.
De onderliggende klasse erft alle openbare en beschermde eigenschappen en methoden van de bovenliggende klasse. Bovendien kan het zijn eigen eigenschappen en methoden hebben.
Een overgeërfde klasse wordt gedefinieerd door het sleutelwoord extends te gebruiken.
*/
class Aarde {
  
}
class Fruit extends Aarde {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>