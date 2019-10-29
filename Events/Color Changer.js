//Matthew K. Mills
//N220
// 2/19/2019
//Color Changer
let myDiv = document.querySelector("#greyDiv");
let myDiv2 = document.querySelector("#greyDiv2");
let myDiv3 = document.querySelector("#greyDiv3");

myDiv.addEventListener("click",handleClick);
myDiv2.addEventListener("click",handleClick);
myDiv3.addEventListener("click",handleClick);

function handleClick(event) {
    let colorOnTarget = event.target.getAttribute("data-color")
    event.target.style.backgroundColor = colorOnTarget;
}