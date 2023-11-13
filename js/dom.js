//dom = document object model

//<button id="test" class="foo">button</button> <-- wir wollen dieses element
let element //wege auf dieses element zuzugreifen
element = document.getElementById("test") //element durch id
element = document.getElementsByClassName("foo") //alle elemente mit klasse "foo"
element = document.querySelector("#test") //erstes elemente mit id "test"
element = document.querySelector(".foo") //erstes klasse mit id "foo"
element = document.querySelectorAll("#test") //alle elemente mit id "test"
element = document.querySelectorAll(".foo") //alle elemente mit klasse "foo"
