<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'test' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );
# maak de verbinding en controleer of deze werkt.
$db_con = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME, 3306) ;

if (mysqli_connect_errno()) {
    echo "Verbinding mislukt: " . mysqli_connect_error();
    exit();
}

# selecteer eventueel andere database
mysqli_select_db($db_con, DB_NAME) ;

# eventueel afsluiten
mysqli_close($db_con) ;