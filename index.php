<!--Author: Oussoumane Mahaman Madani ( GOMYC{}DE ) -->


<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 8/12/18
 * Time: 2:50 AM
 */


//declaring the variables
$nom = "Sam";
$anneeNaissance = 2000;

//date(Y) sends the current year in full, ie. "2018" not "18"
echo "Bonjour Mr $nom vous avez " , date(Y) - $anneeNaissance, " ans";
