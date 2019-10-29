let values = document.querySelector("#numbers");
let total = 0;
let myArray = [];
function sum(){
let variableX = values.value
myArray = variableX.split(",");
for(let i = 0; i < myArray.length;i++){
    let itemAtIndex = myArray[i];
    total += itemAtIndex
    console.log(myArray)
document.body.appendChild(answerDiv)
}
}
