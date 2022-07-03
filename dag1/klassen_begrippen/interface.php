<?php
/*
Met interfaces kunt u specificeren welke methoden een klasse moet implementeren.
Interfaces maken het gemakkelijk om verschillende klassen op dezelfde manier te gebruiken. Wanneer een of meer klassen dezelfde interface gebruiken, wordt dit "polymorfisme" genoemd.
*/

interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
?>