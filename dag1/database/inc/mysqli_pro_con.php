<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'test' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
# maak de verbinding en controleer of deze werkt.
$db_con = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME, 3306) ;
# Check connection
if (!$db_con) {
    die("Connection failed: " . mysqli_connect_error());
}

# selecteer eventueel andere database
mysqli_select_db($db_con, DB_NAME) ;