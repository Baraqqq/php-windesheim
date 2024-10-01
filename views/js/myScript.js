//
// for(let i = 1; i < myArray.length; i++) {
//     console.log(myArray[i]);
// }
// // Objecten
// const person = {
//     name: "Mischa",
//     height: 186
// }
//
// // const user = new person()
// const person2 = {
//     name: "Damien",
//     height: 183
// }
// // console.log(myObj.person01.firstname)
//
// // const object = { a: 1, b: 2, c: 3 };
//
// //'i' are properties of object person2
// for (const i in person2) {
//     console.log(i + ": " + person2[i]);
// }
//
// let arrayX = ["x", "y", "z"]
// console.log(...arrayX)
// // Expected output:
// // person: Stephan Hoeksema
//
function Car(make, model, year) {
    this.make = make;
    this.model = model;
    this.year = year;
}

let jsDisplay = document.getElementById('js');
//let myCar = new Car('Kia', 'Ceed', 2022);
//jsDisplay.innerHTML = myCar.make + " " + myCar.year;

let myArray = ["Stephan", "Arie", "Eva"];

myArray.push("Stefanie");
myArray[1] = "Bassima";
jsDisplay.innerHTML = myArray.length + "<br>";

myArray.forEach((element) => jsDisplay.innerHTML = jsDisplay.innerHTML + (element) + "<br>");
