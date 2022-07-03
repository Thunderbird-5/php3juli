<?php
# mysqli_fetch methodes
# function: mysqli procedureel / method: object-notatie()
/*
Beschrijving: haal het resultaat op als array 
function: mysqli_fetch_all()
method: ->fetch_all()

Beschrijving: haal het huidige record in het resultaat op als array (denk aan de cursor)
              MYSQLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH als tweede parameter geeft array type aan
function: mysqli_fetch_array()
method: ->fetch_array()

Beschrijving: haal het huidige record in het resultaat op als associatieve array (denk aan de cursor)
function: mysqli_fetch_assoc()
method: ->fetch_assoc()

Beschrijving: haal de metadata op van een veld (kolom) uit het resultaat
function: mysqli_fetch_field_direct()
method: ->fetch_field_direct()

Beschrijving: haal de metadata op van het volgende veld (kolom) uit het resultaat
function: mysqli_fetch_field()
method: ->fetch_field()

Beschrijving: haal de metadata op van alle velden (kolommen) uit het resultaat als array
function: mysqli_fetch_fields()
method: ->fetch_fields()

Beschrijving: haal het huidige record in het resultaat op als object (denk aan de cursor)
function: mysqli_fetch_object()
method: ->fetch_object()

Beschrijving: haal het huidige record in het resultaat op als numerieke array (denk aan de cursor, start met 0)
function: mysqli_fetch_row()
method: ->fetch_row()

Beschrijving: plaatst de pointer (cursor) naar een specifiek veld in het resultaat
function: mysqli_field_seek()
method: ->field_seek()

Beschrijving: plaatst de pointer (cursor) naar een specifiek record in het resulaat
function: mysqli_data_seek()
method: ->data_seek()

Beschrijving: maak het geheugen vrij van het resultaat
function: mysqli_free()
method: ->free()

*/
