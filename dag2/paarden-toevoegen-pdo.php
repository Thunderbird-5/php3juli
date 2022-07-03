<?php
//  connectie maken
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost:3306' ); // 3306 is de standaard en mag weggelaten worden
define( 'DB_NAME', 'paarden' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
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
    $naam = 'Hennie';
    $geboren = date("Y-m-d",time()) ; // php datum van nu in datum string '1996-09-20 00:00:00'
    $ras_ID = 5 ; // 
    $sql = "INSERT INTO `paarden` (`naam`, `geboren`, `ras_ID`) 
            VALUES (:naam, :geboren, :ras_ID)";
    $statementSELECT = $mijnVerbinding->prepare( $sql );
    $statementSELECT->bindValue( ':naam', $naam, PDO::PARAM_STR );
    $statementSELECT->bindValue( ':geboren', $geboren, PDO::PARAM_STR );
    $statementSELECT->bindValue( ':ras_ID', $ras_ID, PDO::PARAM_INT );
    //  sluit de connectie (verloopt automatisch wanneer einde van je script)
    // $mijnVerbinding = null ;    
    // dan de query uitvoert
    $statementSELECT->execute();
    echo $mijnVerbinding->lastInsertId();
//     $returnObject = $statementSELECT->fetchAll( PDO::FETCH_OBJ );
//     //  verwerkt het resultaat in php
//     // var_dump($returnObject) ;
//     // bv namen van paarden in een lijstje
//     foreach ($returnObject as $key => $value) {
//         # code...
//         //  presenteer het resultaat
//         echo $value->naam . '<br>' ;
//     }

