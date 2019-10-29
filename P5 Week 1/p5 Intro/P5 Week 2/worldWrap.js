//Matthew K. Mills
//N220
// 3/26/2019
//World Wrap
function setup(){
    createCanvas(800,600);
    fill(0, 100, 200);

}
//Sets the starting position of the circle in the top left corner
let xPos = 0;
let yPos = 0;

function draw() {
    background(255);
//Several if statements to see if the user is inputting a key and moves the circle in the direction they are indicating
    if(keyIsDown(39))
        xPos++;
    if(keyIsDown(37))
        xPos--;
    if(keyIsDown(40))
        yPos++;
    if(keyIsDown(38))
        yPos--;
//if and else if statements that check to see if ther circle 
//has crossed a border and then resets it to the opposite side
    if(xPos>800){
        xPos=0;
    }
    else if (xPos < 0){
        xPos=800
    }
    if(yPos>600){
        yPos=0;
    }
    else if (yPos < 0){
        yPos=600
    }
    circle(xPos,yPos,30);
    
}