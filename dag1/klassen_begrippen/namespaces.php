<?php
/**
 * Naamruimten zijn kwalificaties die twee verschillende problemen oplossen:
 * Ze zorgen voor een betere organisatie door klassen te groeperen die samenwerken om een taak uit te voeren
 * Ze staan toe dat dezelfde naam voor meer dan één klasse wordt gebruikt
 * U kunt bijvoorbeeld een reeks klassen hebben die een HTML-tabel beschrijven, zoals Tafel, Rij en Cel, terwijl u ook een andere reeks klassen hebt om meubels te beschrijven, zoals Tafel, Stoel en Bed. Naamruimten kunnen worden gebruikt om de klassen in twee verschillende groepen in te delen en tegelijkertijd te voorkomen dat de twee klassen Table en Table door elkaar worden gehaald.
 */
namespace Code\Html;
class Table {
    public $title = "";
    public $numRows = 0;
    public function message() {
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
  }

// Gebruik door direct te verwijzen
$table = new Code\Html\Table() ;

// Gebruik door eerst namespace declaratie (vooraan in document!)
namespace Code\Html;
$table = new Table() ;

// Namespaces en klassen mogen aliassen hebben!
use Code\Html as CH ;
$table = new CH\Table() ;

use Code\Html\Table as T ;
$table = new T() ;