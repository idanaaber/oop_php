<?php
/**
 * Created by PhpStorm.
 * User: kevin.randmaa
 * Date: 11.12.2018
 * Time: 9:27
 */


//Ülesanne 1
/*Loo programm, mille sees
a) defineeritud muutujate abil
Eesnimi perenimi
kursuse tähis
kursuse number
kooli email
b) Väljastatud muutujate väärtused koos sobiva teksitga html faili kujul
*/

//muutujate defineerimine
$nimi = 'Kevin Randmaa';
$kursuseTähis = 'KD18';
$kursuseNumber = '1.';
$kooliEmail = 'kevin.randmaa@khk.ee';
echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>KD18</title>
    </head>
    <body>
        <p>$nimi = '. $nimi. '</p>
        <p>$kursuseTähis = '. $kursuseTähis. '</p>
        <p>$kursuseNumber = '. $kursuseNumber. '</p>
        <p>$kooliEmail = '. $kooliEmail. '</p>
    </body>
    </html>
 ';
