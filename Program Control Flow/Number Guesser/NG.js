//Matthew K. Mills and Thomas Martin
//N220
// 1/22/2019
//Number Guesser
//Couldnt figure out how to get the code to work with alerts Thomas found a way to get it to work without them!
let userNum = Number(prompt("Pick a number between 0-20"));
let y = 0;
let randoNum = Math.round(Math.random() * 20);
while (y < 1) {
    
    if (userNum == randoNum) {
        userNum = Number(prompt("Correct, guess my new number!"));
        randoNum = Math.round(Math.random() * 20);
    
    }
    else if (userNum > randoNum) {
        userNum = Number(prompt("Sorry, try a smaller number."));
    }
    else {
        userNum = Number(prompt("Sorry, try a larger number."));
    } 
}