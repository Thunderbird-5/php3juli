<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost:3307' );
define( 'DB_NAME', 'test' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
# maak de verbinding en controleer of deze werkt.
function verbinden(){
  $verbinding = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
  $db = null;
  try{
    return new PDO( $verbinding, DB_USER, DB_PASS );
  }catch( PDOException $e ){
    #return NULL;
    die("Verbinding mislukt:" . $e) ;
  }
}
$connectie_object = verbinden() ;