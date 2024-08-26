<?php

/* 

Eksempel 1 

Programmet mottar informasjon fra HTML skjema med POST-metoden
Programmet skriver så ut en "god dag" melding med brukerens fornavn og etternavn.

*/


$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];

echo "God dag $fornavn $etternavn";



?>