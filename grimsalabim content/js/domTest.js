'use strict'

function init() {
  let art1 = document.getElementById("artikel1");
  art1.style.color = "red";
  let artikel1Header = document.createElement('h2');
  artikel1Header.textContent = "Eine Überschrift";  //nicht value
  art1.appendChild(artikel1Header);

  let fetterText = document.getElementsByTagName('b');
  for(let elem of fetterText) {
    elem.style.textDecoration = 'underline';
  }

  let zweiterAbsatz = document.querySelectorAll('#artikel2 b');
  zweiterAbsatz[1].style.fontStyle = 'italic';

  let klassenSelektor = document.getElementsByClassName('test');
  for(let elem of klassenSelektor)
    elem.style.color = 'green';

  let toDelete = document.querySelector('#artikel2>p>b:nth-child(3)');
  toDelete.parentNode.removeChild(toDelete);
}

document.addEventListener('DOMContentLoaded', init); 
