//variablen typen
let foo = "hallo" // veränderbare Variable
const bar = "welt" // konstante Variable
var baz = "sheeeshkröte" // globale Variable

//basic types
const number = 1 // sowohl integer als auch float
const text = "hey hoooo" // string
const boolean = true // bool true || false
const nullptr = null // null/nichts
//der wert weiß noch nicht was er wird
const undefinedValue = undefined 
const object = {} //objekt/dictionary

//array ist const, kann aber trotzdem werte 
//erhalten, da es ein pointer ist
//(prinzip gilt auch für objekte -> {})
//array kann alle values enthalten
const arr = [1, "foo", null, true, ["other array"]]
arr.push("test")

//loops
//standart c like for loop
for (let i = 0; i < arr.length; i++) {
  console.log(arr[i])
}

// for of loop iteriert direkt über array
for (const value of arr) {
  console.log(value)
}

//foreach loop, dasselbe wie oben nur als array methode
arr.forEach(element => {
  console.log(element)
});

//while loop
let i = 0
while (i < arr.length) {
  console.log(arr[i])
  i++
}

//if else if else
const x = 10
if (x > 7) {
  console.log("x is bigger than 7")
} else if (x > 10) {
  console.log("x is bigger than 10")
} else {
  console.log("x is smaller that 7")
}