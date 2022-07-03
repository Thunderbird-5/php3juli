<?php
# voordat je gegevens naar een server stuurt zorg je ervoor dat de SQL query goed is 'ingevuld'
# gegevens uit een formulier / website moeten ALTIJD gezuiverd worden
$f_voornaam = $_POST['voornaam'] ; // string
$f_achternaam = $_POST['achternaam'] ; // string
$f_woonplaats = $_POST['woonplaats'] ; // string
$f_geboortedatum = $_POST['geboortedatum'] ; // datum
$f_lid = $_POST['lid'] ; // 1 of 0
# schrijf de model query
$sql_toevoegen = "INSERT INTO leden VALUES(?, ?, ?, ?, ?)" ;
# query laten voorbereiden ($db_con is de verbinding)
$db_con_statement = mysqli_prepare($db_con, $sql_toevoegen) ;
# $db_con_statement = $db->prepare($sql_toevoegen) ; // object notatie
# parameters binden aan variabelen
mysqli_stmt_bind_param($db_con_statement,"ssssi",$f_voornaam,$f_achternaam,$f_woonplaats,$f_geboortedatum,$f_lid) ;
# b: blob i: integer d: double s: string
# $db_con_statement->bind_param("ssssi",$f_voornaam,$f_achternaam,$f_woonplaats,$f_geboortedatum,$f_lid) ; // object notatie
# uitvoeren van de query
mysqli_stmt_execute($db_con_statement) ;
# $db_con_statement->execute() ; // object notatie

# ook bij select statements kan er data uit de website (formulier) gebruikt worden. Deze moet ook voorbereid worden
$f_zoekveld = $_POST['search'] ;
$sql_zoeken = "SELECT * FROM leden WHERE achternaam = ?";
$dbstmt = $db->prepare($sql_zoeken) ;
$dbstmt->bind_param("s",$f_zoekveld) ; 
$dbstmt->execute() ;
$dbstmt->bind_result($db_voornaam, $db_achternaam, $db_woonplaats, $db_lid) ; // mysqli_stmt_bind_result() voor procedureel notatie
$dbstmt->fetch(); // mysqli_stmt_fetch() voor procedureel notatie