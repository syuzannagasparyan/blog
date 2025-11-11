function printString(str) {
  if (str.length < 150) {
    console.log(str);
  } else {
    console.log(str.substring(0, 150));
  }
}
printString("սա կարճ տող է։");
let longText = "A".repeat(200);
printString(longText);

function countMultiplesOfThree(arr) {
  let count = 0;
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] % 3 === 0) {
      count++;
    }
  }
  console.log("3:", count);
}
countMultiplesOfThree([3, 7, 9, 12, 14, 18]);

function countBoxes() {
  let boxes = document.getElementsByClassName('box');
  alert("Էլեմենտների քանակը՝ " + boxes.length);
}
function checkAge() {
  let age = document.getElementById('age').value;
  if (age >= 18 && age <= 100) {
    alert("Դուք չափահաս եք");
  } else {
    alert("Դուք չափահաս չեք");
  }
}
