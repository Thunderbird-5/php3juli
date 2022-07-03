<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost:3306' );
define( 'DB_NAME', 'test' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
# maak de verbinding 
try {
    $db_con_string = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME ;
    $db =  new PDO($db_con_string,DB_USER,DB_PASS) ;
} catch(PDOException $e) {
    echo $e->getMessage();
}