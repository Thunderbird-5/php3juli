<?php
class Fruit {
# voor iedereen bereikbaar = public
# voor alleen binnen de klasse te gebruiken = private
# voor binnen de klasse en afgeleiden ervan = protected
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>