<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'test' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
# maak de verbinding en controleer of deze werkt.
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3306) ;
# Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

# selecteer eventueel andere database
$db->select_db(DB_NAME) ;