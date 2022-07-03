<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'paarden' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'welkom' );

function verbinden(){
  # ik denk dat hier dit gebeurt...
  $verbinding = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
  $db = null;
  try{
    return new PDO( $verbinding, DB_USER, DB_PASS );
  }catch( PDOException $e ){
    #return NULL;
    die($e) ;
  }
}

function allePaarden( &$db ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      *
    FROM
      paarden";

  $vraag = $db->prepare( $sql );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}

function allePaardenMetRas( &$db ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      ID,
      naam,
      geboren,
      rasnaam
    FROM
      paarden
    LEFT JOIN
      rassen
    ON
      paarden.ras_ID = rassen.ID
      ";

  $vraag = $db->prepare( $sql );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}

function rasPaarden( &$db, $welkras ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      ID,
      naam,
      geboren,
      rasnaam
    FROM
      paarden
    LEFT JOIN
      rassen
    ON
      paarden.ras_ID = rassen.ID
    WHERE
      paarden.ras_ID = :rasid
      ";

  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':rasid', $welkras, PDO::PARAM_INT );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}

function nieuwPaard( &$db, $naam, $ras ){
  if( is_null( $db ) ) return '';

  $sql = "
    INSERT
    INTO
      paarden
    ( naam, ras_ID )
    VALUES
      ( :naam, :rasid )
    ";
  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':naam', $naam, PDO::PARAM_STR );
  $vraag->bindValue( ':rasid', $ras, PDO::PARAM_INT );
  $vraag->execute();
  return $db->lastInsertId();
}

function bewerkPaard( &$db, $id, $naam, $rasid ){
  if( is_null( $db ) ) return '';

  $sql = "
    UPDATE
      paarden
    SET
      naam = :naam,
      ras_ID = :rasid
    WHERE
      ID = :id
    ";
  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':naam', $naam, PDO::PARAM_STR );
  $vraag->bindValue( ':rasid', $rasid, PDO::PARAM_INT );
  $vraag->bindValue( ':id', $id, PDO::PARAM_INT );
  $vraag->execute();
}

function verwijderPaard( &$db, $id ){
  if( is_null( $db ) ) return '';

  $sql = "
    DELETE FROM
      paarden
    WHERE
      ID = :id
    ";
  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':id', $id, PDO::PARAM_INT );
  $vraag->execute();
}

function alleRassen( &$db ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      *
    FROM
      rassen
      ";
  $vraag = $db->prepare( $sql );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}
