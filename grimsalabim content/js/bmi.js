'use strict'

let meineInputs = document.querySelectorAll('.styled-input input');

for (let elem of meineInputs) {
    scaleLable(elem, true);
    elem.addEventListener('focus', function () {
        scaleLable(this, false);
    });
    elem.addEventListener('blur', function () {
        scaleLable(this, true);
    });
    elem.addEventListener('input', calcBMI, true);    //https://www.w3schools.com/jsref/dom_obj_event.asp
}

function scaleLable(element, isLikePlaceholder) {
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

function calcBMI() {
    let groesse = document.getElementById('groesse').value;
    let masse = document.getElementById('masse').value;
    groesse = parseFloat(groesse.replace(",", "."));
    masse = parseInt(masse);

    let bmi = masse / Math.pow(groesse, 2);

    let ausgabe = document.getElementById('ausgabe');
    ausgabe.innerHTML = "<b>Ihr BMI:</b> " + bmi.toFixed(2);
    //ausgabe.textContent = bmi.toFixed(2);
    if (bmi < 25)
        ausgabe.style.backgroundColor = '#55CC55';
    if (bmi >= 25 && bmi < 30)
        ausgabe.style.backgroundColor = '#CC8855';
    ausgabe.style.visibility = 'visible';
}

