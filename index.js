function roundToTwo(num) {
 return Number(num.toFixed(2));
}
console.log("1:", roundToTwo(3.14159)); 

function isNumber(value) {
  return typeof value === 'number' && !isNaN(value);
}
console.log("2:", isNumber(5)); 


function numberToStringLength(num) {
  return num.toString().length;
}
console.log("3:", numberToStringLength(12345)); 


function getIntegerPart(num) {
  return Math.trunc(num);
}
console.log("4:", getIntegerPart(4.89));


function toUpper(str) {
  return str.toUpperCase();
}
console.log("5:", toUpper("hello"));


function containsWord(str, word) {
  return str.includes(word);
}
console.log("6:", containsWord("I love JavaScript", "love")); 


function replaceSpaces(str) {
  return str.replace(/ /g, "_");
}
console.log("7:", replaceSpaces("Hello World JS"));


function firstAndLastThree(str) {
  return str.slice(0, 3) + str.slice(-3);
}
console.log("8:", firstAndLastThree("JavaScript")); 


function trimSpaces(str) {
  return str.trim();
}
console.log("9:", trimSpaces("   Hello JS   "));


function getStringLength(str) {
  return str.length;
}
console.log("10:", getStringLength("JavaScript")); 


function addToEnd(arr, element) {
  arr.push(element);
  return arr;
}
console.log("11:", addToEnd([1, 2, 3], 4));


function removeLast(arr) {
  arr.pop();
  return arr;
}
console.log("12:", removeLast([1, 2, 3]));


function firstGreaterThanTen(arr) {
  return arr.findIndex(num => num > 10);
}
console.log("13:", firstGreaterThanTen([3, 8, 12, 5]));


function filterEven(arr) {
  return arr.filter(num => num % 2 === 0);
}
console.log("14:", filterEven([1, 2, 3, 4, 5, 6]));


function multiplyByTwo(arr) {
  return arr.map(num => num * 2);
}
console.log("15:", multiplyByTwo([1, 2, 3]));


function sumArray(arr) {
  return arr.reduce((sum, num) => sum + num, 0);
}
console.log("16:", sumArray([1, 2, 3, 4]));


function containsElement(arr, element) {
  return arr.includes(element);
}
console.log("17:", containsElement([1, 2, 3], 2));


function mergeArrays(arr1, arr2) {
  return arr1.concat(arr2);
}
console.log("18:", mergeArrays([1, 2], [3, 4]));


function sliceArray(arr) {
  return arr.slice(1, 3);
}
console.log("19:", sliceArray([10, 20, 30, 40]));


function sortAscending(arr) {
  return arr.sort((a, b) => a - b);
}
console.log("20:", sortAscending([5, 2, 8, 1]));


function getObjectKeys(obj) {
  return Object.keys(obj);
}
console.log("21:", getObjectKeys({name: "Ani", age: 25}));


function getObjectValues(obj) {
  return Object.values(obj);
}
console.log("22:", getObjectValues({name: "Ani", age: 25}));


function hasKey(obj, key) {
  return obj.hasOwnProperty(key);
}
console.log("23:", hasKey({a: 1, b: 2}, "a"));


function mergeObjects(obj1, obj2) {
  return { ...obj1, ...obj2 };
}
console.log("24:", mergeObjects({a: 1}, {b: 2}));


function getEntries(obj) {
  return Object.entries(obj);
}
console.log("25:", getEntries({x: 10, y: 20}));
