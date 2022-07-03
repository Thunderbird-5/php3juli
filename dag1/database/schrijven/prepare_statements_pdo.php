<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'test' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
# maak de verbinding en controleer of deze werkt.
$verbinding = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME ;
# uitvoeren insert statement met bindParam of bindValue
# prepared statements kunnen herhaald worden uitgevoerd
try{    
    $conn = new PDO( $verbinding, DB_USER, DB_PASS );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO leden (voornaam, achternaam, woonplaats)
    VALUES (:voornaam, :achternaam, :woonplaats)");
    $stmt->bindParam(':voornaam', $f_voornaam, PDO::PARAM_STR);
    $stmt->bindParam(':achternaam', $f_achternaam, PDO::PARAM_STR);
    $stmt->bindParam(':woonplaats', $f_woonplaats, PDO::PARAM_STR);
        # uit het formulier
        $f_voornaam = "Andre";
        $f_achternaam = "Krouwel";
        $f_woonplaats = "Amsterdam";
        $stmt->execute();
        # uit het formulier
        $f_voornaam = "Nellie";
        $f_achternaam = "Teunissen";
        $f_woonplaats = "Bakel";
        $stmt->execute();
    # laat weten dat het gelukt is
    echo "Nieuwe leden zijn toegevoegd.";
} catch(PDOException $e) {
    echo "Oops: " . $e->getMessage();
}
$conn = null;
  
?>