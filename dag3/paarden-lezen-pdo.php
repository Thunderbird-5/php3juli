<?php
//  connectie maken
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost:3306' ); // 3306 is de standaard en mag weggelaten worden
define( 'DB_NAME', 'paarden' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'opatel' );
$mijnVerbinding = null ;
try {
    $mijnVerbinding = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS );
    // echo "Het is gelukt!" ;
    // var_dump($mijnVerbinding) ;
    } catch(PDOException $error){
        die("OOPS! ". $error) ;
    }
//  stuurt SQL naar de database
    // eerst de query samenstelt
    $sql = "SELECT * FROM paarden";
    $statementSELECT = $mijnVerbinding->prepare( $sql );
    //  sluit de connectie (verloopt automatisch wanneer einde van je script)
    $mijnVerbinding = null ;    
    // dan de query uitvoert
    $statementSELECT->execute();
    $returnObject = $statementSELECT->fetchAll( PDO::FETCH_OBJ );
//  verwerkt het resultaat in php
    // var_dump($returnObject) ;
    // bv namen van paarden in een lijstje
    foreach ($returnObject as $key => $value) {
        # code...
        //  presenteer het resultaat
        echo $value->naam . '<br>' ;
    }

