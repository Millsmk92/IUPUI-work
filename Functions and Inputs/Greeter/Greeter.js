//Matthew K. Mills
//N220
//1/29/2019
//Greeter
function greeting(){
    var userName=document.getElementById("fullName").value;
    outputGreeting(userName);
};
function outputGreeting(x){
    console.log("Hello" +" " + x);
};