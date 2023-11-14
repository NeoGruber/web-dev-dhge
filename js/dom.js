//dom = document object model

//<button id="test" class="foo" name="myButton">button</button> <-- wir wollen dieses element
let element //wege auf dieses element zuzugreifen
element = document.getElementById("test") //element durch id
element = document.getElementsByClassName("foo") //alle elemente mit klasse "foo"
element = document.querySelector("#test") //erstes elemente mit id "test"
element = document.querySelector(".foo") //erstes klasse mit id "foo"
element = document.querySelectorAll("#test") //alle elemente mit id "test"
element = document.querySelectorAll(".foo") //alle elemente mit klasse "foo"
element = document.getElementsByName("myButton") //elemente mit name "myButton"
element = document.getElementsByTagName("button") //elemente mit tag "button"

//event listener
element.addEventListener("click", doSomething()) // führt event bei einem click aus
/* Andere Events
click   tritt auf, wenn der user etwas klickt
focus   tritt auf wenn das (input) element im fokus (ausgewählt?) ist
blur    tritt auf, wenn der user das input feld verlässt
input   tritt auf, wenn der user etwas ins input eingibt
*/

function doSomething() {
  alert("event got executed")
}

//zugrif auf values bei input
//<input id="name-input" type="text" placeholder="Name"> <-- wir arbeitem mit diesem element
document.getElementById("name-input").addEventListener("input", (event) => {
  alert(this.value) //gibt jetzt den wert von input aus.
})

//style von element manipulieren
element.style.color = "red" // schriftfarbe rot färben

//Eventlistener auf das HTML dokument selbst
document.addEventListener('DOMContentLoaded', doSomething()); 
// "DOMContentLoaded" -> (html) Dokument wurde geladen

//irgendwas in die html seite schreiben
//document.write ist ein bad practice und absolut nicht zu empfehlen
document.write("<h1>Überschift tralalalala</h1>");
