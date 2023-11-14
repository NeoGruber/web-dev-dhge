'use strict'

let inputElements = document.querySelectorAll('.bmi-form input');

console.log(inputElements.length)

for (let elem of inputElements) {
    console.log("foo")
    scaleLable(elem, true);
    elem.addEventListener('focus', function () {
        scaleLable(this, false);
    });
    elem.addEventListener('blur', function () {
        scaleLable(this, true);
    });
    elem.addEventListener('input', getBmi, true);    //https://www.w3schools.com/jsref/dom_obj_event.asp
}

function scaleLable(element, isLikePlaceholder) {
    console.log("scale: " + isLikePlaceholder)
  if (isLikePlaceholder) {
      if (element.value === '') {
          element.parentNode.querySelector('label').classList
              .add('like-placeholder');
      }
  } else {
      element.parentNode.querySelector('label').classList
          .remove('like-placeholder');
  }
}

function getBmi() {
  const sizeInputElement = document.getElementById("size")
  const weightInputElement = document.getElementById("weight")
  const output = document.getElementById('output');

  const fixSize = sizeInputElement.value.replace(",", ".") // ersetzt ',' durch '.'
  const size = parseFloat(fixSize)
  const weight = parseFloat(weightInputElement.value)

  let bmi = weight / Math.pow(size, 2);

  output.innerHTML = "<b>dein BMI:</b> " + bmi.toFixed(2);

  output.style.backgroundColor = bmi < 25 ? '#55CC55' : '#CC8855'
  ausgabe.style.visibility = 'visible'
}