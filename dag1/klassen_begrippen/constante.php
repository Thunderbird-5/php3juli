<?php
/*
Constanten kunnen niet worden gewijzigd als ze eenmaal zijn gedeclareerd.
Klasseconstanten kunnen handig zijn als u enkele constante gegevens binnen een klasse moet definiëren.
Een klasseconstante wordt gedeclareerd binnen een klasse met het const-sleutelwoord.
Klasseconstanten zijn hoofdlettergevoelig. Het wordt echter aanbevolen om de constanten in hoofdletters te noemen.
We hebben toegang tot een constante van buiten de klasse door de klassenaam te gebruiken, gevolgd door de scope-resolutie-operator (::) gevolgd door de constante naam
*/

class Goodbye {
  const LEAVING_MESSAGE = "Bedankt en tot ziens!";
}

echo Goodbye::LEAVING_MESSAGE;

class MoreGoodbye {
    const LEAVING_MESSAGE = "Bedankt en tot ziens!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
$goodbye = new MoreGoodbye();
$goodbye->byebye();
?>