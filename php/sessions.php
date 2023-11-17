<?php
// Wofür brauchen benötigen wir Sessions?
// * Daten wie Session ID (allgemein: Umgebungsvariablen) werden im Browser permanent gespeichert, um den Nutzer zu identifizieren
// * -> Zweck = u.a. unnötige Logins vermeiden

// darf nur einmal auf dem Seitenkomplex vorkommen
session_start();

// Session-Variable für das Element "name" zurücksetzen
// unset ($_SESSION["name"]);

// Daten werden in $_SESSION-Array gespeichert
// Session-Variable für das Element "name" setzen
$_SESSION["name"] = "Günther";

if (!isset($_SESSION["name"])) {
    echo "<br>Session-Variable 'name' ist nicht gesetzt. Bitte logge dich ein.";
} else {
    echo "<br>Session-Variable 'name' ist gesetzt. Willkommen zurück, " . $_SESSION["name"] . "!";
}

// Session löschen
session_destroy();

// Cookies werden clientseitig gespeichert
// Cookie mit 24h Gültigkeit erstellen
setcookie("myCookie", "myValue", time() + 60 * 60 * 24);

$theCookie = $_COOKIE["myCookie"];
echo "<br><br>Der Cookie 'myCookie' hat den Wert: " . $theCookie . "<br>";

// Cookie löschen
setcookie("myCookie", "", time() - 60 * 60 * 24);
?>