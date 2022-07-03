<?php
/**
 * Statische eigenschappen kunnen direct worden aangeroepen - zonder een instantie van een klasse te maken.
 * Statische eigenschappen worden gedeclareerd met het statische sleutelwoord: static
 * Statische methoden kunnen direct worden aangeroepen - zonder eerst een instantie van de klasse te maken.
 * Statische methoden worden gedeclareerd met het statische sleutelwoord.
 */

class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>