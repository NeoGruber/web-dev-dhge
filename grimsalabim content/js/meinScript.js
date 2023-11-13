'use strict'

alert(`Webentwicklung mit 
JS`);

//Zeichenketten in "" '' ``

let ihrName;
ihrName = prompt('Bitte geben Sie ihren Namen ein!', ihrName);
alert("Hallo " + ihrName);

console.log("Hier eine Ausgabe auf der Konsole!");
console.info("Ein Fehler ist aufgetreten!");

if(!true) {

} else if(true) {

} else {

}

let zahl = 5;
switch (zahl) {

    case 0: document.write("Null");
            break;
    case 1:
    case 2:
    case 3:
    case 4: document.write("zu klein!");
            break;
    case 5: document.write("Treffer!!!");
            break;
    default: document.write("zu groß");
}

while(zahl > 0) {
    document.write("<br>Zahl ist " + zahl);
    zahl--;
}

document.write("<table border='1'>");
do {
    document.write("<tr><td>" + zahl + ".</td></tr>");
    zahl++;
} while(zahl < 6);
document.write("</table>");

document.write("<ul>");
for(let i=0; i<zahl; i++) {
    document.write("<li>" + i + "</li>");
}
document.write("</ul>");

function ggT(a, b) {
    if(b == 0)
      return a;
    return ggT(b, a%b);
}

document.write("<br><br><em style='color: red'>Der ggT von 25 und 5 ist " 
                + ggT(5, 25) + "</em><br><br>");

document.write("<script>alert('What the hack???');</script>");

