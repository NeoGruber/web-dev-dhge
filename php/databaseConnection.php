<?php
// wichtg, dass hier schon deklariert, weil sonst nicht außerhalb verwendbar ist
$databaseHandler = null;

// ein simpler Verbindungsaufbau zur Datenbank mit Fehlerbehandlung (denke mal nicht, dass mehr abgefragt wird)
try {
    $databaseHandler = new PDO(
        "mysql: host=192.168.71.10; dbname=...",
        "username",
        "password"
    );
} catch (PDOException $e) {
    echo "<b class='error'>Fehler beim Verbinden mit der Datenbank:</b> " . $e->getMessage();
    die("Die Fehlermeldung");
}

// Wie könnte man eine Abfrage ausführen? (falls doch gefragt wird)
// query erstellen
$sql = "select * from myTable";

// FETCH_ASSOC = als assoziatives Array erhalten
// -> sonst erhält man Ergebnis 2 mal: als assoziatives Array und als indexbasiertes Array
$result = $dbhandle->query($sql, PDO::FETCH_ASSOC);
?>