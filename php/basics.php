<?php
// Wie wird PHP-Seite geladen?
// * 1. Anfrage an Server über bestimmten Port
// * 2. Webserver muss PHP-Modul installiert haben
// * → mit .php-Dateien was anfangen
// * 3. Anfrage an PHP-Modul weitergeben
// * 4. PHP-Modul: Generierung von .html-Datei
// * 5. …

// Inhalt von anderen Dateien inkludieren
// Quellcode wird bei allen direkt eingefügt
// include(""); # bei Fehler wird das Script weiter ausgeführt
// include_once(""); # s. include, aber Überprüft, ob Datei bereits eingebunden wurde -> Loops verhindern
// require(""); # bei Fehler wird das Script abgebrochen
// require_once(""); # s. require, aber Überprüft, ob Datei bereits eingebunden wurde -> Loops verhindern

/// ++++++++ Variablendklaration ++++++++ 
// mögliche Typen: int, float, string, bool, array, null
$eineVariable = 1;

/// ++++++++ Ausgaben ++++++++
// . statt + für die Verkettung von Strings
echo "Der Wert der Variable ist: " . $eineVariable . "<br>";
echo "So geht es auch:  $eineVariable<br>";

// var_dump() gibt den Typ und den Wert einer Variablen aus
// Output: int(1)
var_dump($eineVariable);

// print_r() gibt den Wert einer Variablen aus
// Output: 1
print_r($eineVariable);

/// ++++++++ Konstrukte ++++++++
// if-else
if ($eineVariable === 1) {
    echo "";
} else if ($eineVariable === 2) {
    echo "";
} else {
    echo "";
}

// switch-case
switch ($eineVariable) {
    case 1:
        break;
    case 2:
        break;
    default:
        break;
}

// for
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

// while
$value = 10;
while ($value > 0) {
    echo $value . "<br>";
    $value--;
}

// do-while
$value = 10;
do {
    echo $value . "<br>";
    $value--;
} while ($value > 0);

// foreach
$meinArray = array(1, 2, 3, 4, 5);
foreach ($meinArray as $value) {
    echo $value . "<br>";
}

// try-catch
try {
    echo "Versuche etwas<br>";
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

/// ++++++++ Arrays ++++++++
// indexbasiert
$indexArray = array(1, 2, 3, 4, 5);
echo $indexArray[0] . "<br>"; // Zugriff auf ein Element

foreach ($indexArray as $value) {
    echo $value . "<br>";
}

// assoziativ
$wochentage = array(
    "mo" => 1,
    "di" => 2,
    "mi" => 3,
    "do" => 4,
    "fr" => 5,
    "sa" => 6,
    "so" => 7
);
echo $wochentage["mo"] . "<br>"; // Zugriff auf ein Element

foreach ($wochentage as $key => $value) {
    echo "Der Tag '" . $key . "' hat den Wert " . $value . "<br>";
}

// mehrdimensional
$mehrdimensionalesArray = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo $mehrdimensionalesArray[0][0] . "<br>"; // Zugriff auf ein Element

foreach ($mehrdimensionalesArray as $array) {
    foreach ($array as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

/// ++++++++ Array-Methoden ++++++++
// Array mit Trennzeichen (hier: ,) in String
$implodedArray = implode(",", $indexArray);
// Imploded-String mit Trennzeichen (hier: ,) in Array
$wiederNormalesArray = explode(",", $implodedArray);

// Anzahl der Elemente im Array
$anzahl = count($wochentage);

// existiert der Wert 1 im Array? -> true / false
// ACHTUNG: case sensitive
if (in_array(1, $wochentage)) {
    echo "1 ist dabei<br>";
}

// existiert der Key "mo" im Array? -> true / false
// ACHTUNG: case sensitive
if (array_key_exists("mo", $wochentage)) {
    echo "Mo ist dabei<br>";
}

/// ++++++++ String-Methoden ++++++++
$unserString = "Hallo Welt";

// Alle Zeichen in Großbuchstaben
echo strtoupper($unserString) . "<br>";

// Alle Zeichen in Kleinbuchstaben
echo strtolower($unserString) . "<br>";

// Erstes Zeichen von jedem Wort in Großbuchstaben
echo ucfirst($unserString) . "<br>";

// Position des ersten Vorkommens von "a" in $unserString
// ACHTUNG: case sensitive
// Ausgabe: 1
echo strpos($unserString, "a") . "<br>";
// Ausgabe: false
echo strpos($unserString, "c") . "<br>";
// Position des ersten Vorkommens von "a" in $unserString ab Index 7 beginnend
// Ausgabe: 8
echo strpos($unserString, "l", 7) . "<br>";

// Länge des Strings
// Ausgabe: 10
echo strlen($unserString) . "<br>";

// Teilstring von Index 0 und Länge 2
// Ausgabe: "Ha"
echo substr($unserString, 0, 2) . "<br>";

// Ersetzen von "Welt" durch "PHP"
// ACHTUNG: case sensitive
// Ausgabe: "Hallo PHP"
echo str_replace("Welt", "PHP", $unserString) . "<br>";
// nicht case insensitive Variante
// Ausgabe: "Hallo PHP super"
echo str_ireplace("wELt", "PHP super", $unserString) . "<br>";

// Umwandlung aller \n zu <br>
$andererString = "Hallo\nWelt!\n";
// Ausgabe: "Hallo<br>Welt"
echo nl2br($andererString);

/// ++++++++ Allgemeine Methoden ++++++++
// Ausgabe der Zeit
echo date("d-m-Y H:i:s", time()) . "<br>";

// Ausgabe der Zeit in Unix-Timestamp
echo strtotime("11 November 2011 11:11") . "<br>";

// Potenz -> Ausgabe: 2^3 = 8
echo pow(2, 3) . "<br>";

// Wurzel -> Ausgabe: sqrt(9) = 3
echo sqrt(9) . "<br>";

/// ++++++++ Eigene Funktionen ++++++++
// Angabe von Datentypen (bei Paremetern und Returntyp) ist optional
function addNumbers(int $number1, $number2): int
{
    return $number1 + $number2;
}

// Ausgabe: 3
echo addNumbers(1, 2) . "<br>";

$shouldDie = false;

if ($shouldDie) {
    die("Ich bin gestorben: Hier kommt eine Fehlermeldung rein");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Weiterer PHP Code / Verwendung definierter Funktionen / ...
    ?>
</body>

</html>