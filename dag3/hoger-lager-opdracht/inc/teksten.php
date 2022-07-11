<?php
// taal array van maken kan ook
// $teksten["nl"]["welkom"] = "Welkom bij dit spel." ;
// $teksten["nl"]["hoger"] = "U moet hoger raden." ;
// $teksten["nl"]["lager"] = "U moet lager raden." ;
// $teksten["nl"]["goed"] = "U heeft goed geraden." ;
// $teksten["en"]["welkom"] = "Welcome to the game." ;
// $teksten["en"]["hoger"] = "Guess higher!" ;
// $teksten["en"]["lager"] = "Guess lower!" ;
// $teksten["en"]["goed"] = "Well done!" ;
// $teksten["es"]["welkom"] = "Welcome to the game." ;
// $teksten["es"]["hoger"] = "Guess higher!" ;
// $teksten["es"]["lager"] = "Guess lower!" ;
// $teksten["es"]["goed"] = "Well done!" ;
/**
 * Hoe zou deze array in een tabel geplaatst kunnen worden?
 * database: hogerlager (applicatie)
 * tabelnaam: tekst
 * kolommen: id, taal, keyword, tekst
 */
// Hoe kunnen we de array toevoegen aan de tabel?
/**
 * 1. verbinding maken met de database
 * 2. sql statement maken
 * 3. prepare van de executie
 * 4. uitvoeren van het statement
 * 5. afsluiten
 */
//  connectie maken
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost:3306' ); // 3306 is de standaard en mag weggelaten worden
define( 'DB_NAME', 'hogerlager' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'opatel' );
$mijnVerbinding = null ;
try {
    $mijnVerbinding = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS );
    } catch(PDOException $error){
    die("OOPS! ". $error) ;
}
// foreach ($teksten as $key => $value) {
//     // echo $key ; // nl en es
//     foreach ($value as $key2 => $value2){
//         // eerst de query samenstelt
//     $taal = $key ;
//     $keyword = $key2 ;
//     $tekst = $value2 ;
//     $sql = "INSERT INTO `tekst` (`taal`, `keyword`, `tekst`) 
//             VALUES (:taal, :keyword, :tekst)";
//     $statementSELECT = $mijnVerbinding->prepare( $sql );
//     $statementSELECT->bindValue( ':taal', $taal, PDO::PARAM_STR );
//     $statementSELECT->bindValue( ':keyword', $keyword, PDO::PARAM_STR );
//     $statementSELECT->bindValue( ':tekst', $tekst, PDO::PARAM_STR );    
//     // dan de query uitvoert
//     $statementSELECT->execute();
//     }
// }

// Kunnen we $teksten vullen met data uit de database?
// eerst de query samenstelt
$sql = "SELECT * FROM tekst";
$statementSELECT = $mijnVerbinding->prepare( $sql );
//  sluit de connectie (verloopt automatisch wanneer einde van je script)
$mijnVerbinding = null ;    
// dan de query uitvoert
$statementSELECT->execute();
$returnObject = $statementSELECT->fetchAll( PDO::FETCH_ASSOC );
// var_dump($returnObject) ;
$a_teksten = array() ;
foreach ($returnObject as $key => $value) {
    $a_teksten[$value['taal']][$value['keyword']] = $value['tekst'] ;
    // echo $value['taal'] . '<br>' ;
    // echo $value['keyword'] . '<br>' ;
    // echo $value['tekst'] . '<br>' ;
    // echo '<hr>' ;
}
// var_dump($a_teksten) ;
$teksten = $a_teksten ;
// var_dump(json_encode($teksten)) ;