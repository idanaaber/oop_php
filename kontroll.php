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
$kursuseTahis = 'KD18';
$kursuseNumber = '1.';
$kooliEmail = 'kevin.randmaa@khk.ee';
echo '
    <!DOCTYPE html>
    <html lang="et">
    <head>
       
        <title>Kontroll</title>
    </head>
    <body>
        <p>Minu nimi on '. $nimi. '</p>
        <p>Minu kursuse tähis Tartu Kutsehariduskeskuses on '. $kursuseTahis. '</p>
        <p>Õpin '. $kursuseNumber. ' kursusel.</p>
        <p>Minu kooli e-posti aadress on '. $kooliEmail. '</p>
    </body>
    </html>
 ';