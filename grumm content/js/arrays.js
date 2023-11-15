'use strict'

let dasFeld = ["Hallo", "Hi", "Tach"]; 
let namen = ["Silke", "Klaus", "Mutti"];

let matrix = new Array(3);

for(let i=0; i<matrix.length; i++)
    matrix[i] = [i+1,i+2,i+3,i+4];
    
document.write(matrix[1][1]);
leerzeilen(1);

for(let i=0; i<dasFeld.length; i++) {
    document.write(dasFeld[i] + " " + namen[i]);
    leerzeilen(3);
}

function leerzeilen(n) {
    for(let i=0; i<n; i++) {
        document.write("<br>");   
    }
}