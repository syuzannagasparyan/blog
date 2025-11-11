function roundToTwo(num) {              //կլորացում 2 նիշով
 return Number(num.toFixed(2));
// 2-rd tarberak ` return Math.round(num * 100) / 100;
}
console.log("1:", roundToTwo(3.4569));
function isnumber(value) {
return typeof value === 'number' && !isNaN(value); //թիվ է թե ոչ
}
console.log("2:",isnumber(5));
console.log(isnumber("abs"));
function numberToStringLength(num) {  //թիվը string կդարձնի ու կտա երկարությունը
    return num.toString().length;
}
console.log("3:",numberToStringLength(85));
function amboxjMas(num){             //տալիս է թվի ամբողջ մասը
    return Math.trunc(num);
}
console.log("4:",amboxjMas(12.5));
function toUpper(str) {      // դարձնում է մեծատառ
    return str.toUpperCase();
}
console.log("5:",toUpper("alien"))  
function include(str,word) {     //բառը կա՞ տողում թե ոչ
    return str.includes(word);
}
console.log("6:",include("I love tou","love"));
function replaceSpaces(str) {      //բացատը փոխարինում է "—"-ով,գլոբալ-> բոլոր հանդիպածները
    return str.replace( / /g,"_");
}
console.log("7:",replaceSpaces("I love you"));
function firstAndLastThree(str){      //կվերադարձնի string-ի առաջին 3 և վերջին 3 նիշերը
    return str.slice(0,3) + str.slice(-3)
}
console.log("8:",firstAndLastThree("Buterfly"));
function trimSpaces(str){       //կհեռացնի string-ի սկզբի և վերջի բացատները
    return str.trim();
}
console.log("9:", trimSpaces(" Hello world  "));
function getStringLength(str) {     //կվերադարձնի string-ի երկարությունը 
    return str.length;
}
console.log("10:", getStringLength("Armenia"));
function addToEnd(arr,element) {     //կավելացնի նոր էլեմենտ զանգվածի վերջում
arr.push(element);
return arr;
}
console.log("11:",addToEnd([1,2,3,4],5));
function removeLast(arr) {
    arr.pop();
    return arr;
}
console.log("12:",removeLast([1,2,3,4,5]))
function firstGreaterThanTen(arr) {      //կգտնի առաջին էլեմենտի ինդեքսը, որը մեծ է 10-ից:
  return arr.findIndex(function(num) {
    return num > 10;
  });
}
console.log("13:",firstGreaterThanTen([3, 8, 12, 5]));
function filterEven(arr) {               //կֆիլտրի զանգվածը և կվերադարձնի միայն զույգ թվերը:
  return arr.filter(function(num) {
    return num % 2 == 0;
  });
}
console.log("13:",firstGreaterThanTen([3, 8, 12, 5]));
function multiplyByTwo(arr){             //կբազմապատկի զանգվածի բոլոր էլեմենտները 2-ով:
   for (let i = 0; i < arr.length; i++) {
        arr[i] *= 2;
    }
let array = [2, 3, 4];
}
console.log("14:",multiplyByTwo(array)); 
function findSum(arr) {               //ֆունկցիա, որը կգտնի զանգվածում թվերի գումարը
    sum=0;
    for(let i=0;i<arr.length;i++) {
        sum+=arr[i];
    }
}
console.log("15:",findSum([1,5,3]));
//արդյոք զանգվածը պարունակում է որոշակի էլեմենտ:

