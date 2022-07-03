<?php
/**
 * PHP ondersteunt alleen enkele overerving: een onderliggende klasse kan slechts van één enkele ouder erven. Dus, wat als een klas meerdere gedragingen moet erven? OOP-kenmerken lossen dit probleem op.
 * Traits worden gebruikt om methoden te declareren die in meerdere klassen kunnen worden gebruikt. Eigenschappen kunnen methoden en abstracte methoden hebben die in meerdere klassen kunnen worden gebruikt, en de methoden kunnen elke toegangsmodificator hebben (openbaar, privé of beveiligd).
 */
include "traits.php" ;
class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>