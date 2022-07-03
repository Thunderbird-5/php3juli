<?php
//  connectie maken
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost:3306' ); // 3306 is de standaard en mag weggelaten worden
define( 'DB_NAME', 'json' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
$mijnVerbinding = null ;
try {
    $mijnVerbinding = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS );
} catch(PDOException $error){
    die("OOPS! ". $error) ;
}
//  stuurt SQL naar de database
    // eerst de query samenstelt
    $s_json = '{"teRaden":4,"pogingen":["5","7","3","4"]}' ;
    $sql = "INSERT INTO `strings` (`json`) VALUES (:s_json)";
    $statementSELECT = $mijnVerbinding->prepare( $sql );
    $statementSELECT->bindValue( ':s_json', $s_json, PDO::PARAM_STR );
    // dan de query uitvoert
    $statementSELECT->execute();
    echo $mijnVerbinding->lastInsertId();