<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Moja strona WWW</title>
 </head>
 <body>
 <p>
 <?php

$liczba1 = $_REQUEST['liczba1'];
$liczba2 = $_REQUEST['liczba2'];
$dzialanie = $_REQUEST['dzialanie'];

if (!isset($_REQUEST['dzialanie'])) {
    echo "Proszę wybrać działanie!";
}

if ($dzialanie='dodawanie') {
    $wynik = $liczba1 + $liczba2;
    echo "Wynik działania", $liczba1, "+", $liczba2, "=", $wynik;
}
if ($dzialanie='odejmowanie') {
    $wynik = $liczba1 - $liczba2;
    echo "Wynik działania", $liczba1, "-", $liczba2, "=", $wynik;
}
if ($dzialanie='mnozenie') {
    $wynik = $liczba1 * $liczba2;
    echo "Wynik działania", $liczba1, "*", $liczba2, "=", $wynik;
}
if ($dzialanie='dzielenie') {
    $wynik = $liczba1 / $liczba2;
    echo "Wynik działania", $liczba1, "/", $liczba2, "=", $wynik;
}

 ?>
</p>
 </body>
</html>