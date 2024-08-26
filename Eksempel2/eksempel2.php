<?php

/* 

Eksempel 2

Programmet mottar 2 tall fra HTML skjema med POST-metoden
Programmet skriver ut de 2 tallene og sumen og differansen

*/


$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];

$sum=$tall1+$tall2;
$differanse=$tall1-$tall2;

print("Tall 1 er $tall1 <br/>" ); /* Eksempel: tall 1 er 4 */
print("Tall 2 er $tall2 <br/>");  /* Eksempel: tall 2 er 6 */

print("Summen er er $sum <br/>");
print("Differansen er $differanse");




?>