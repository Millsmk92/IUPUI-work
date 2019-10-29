//Matthew K. Mills
//N220
// 3/26/2019
//flyPoint
function setup(){
    createCanvas(800,600);
    fill(0, 150, 200);
    background(0);

}
class flyPoint {
    constructor(xPos, yPos) {
        this.x = xPos
        this.y = yPos
    }
}

let xPos = Math.floor(Math.random()*800);
let yPos =Math.floor(Math.random()*600);
let xPos1 = Math.floor(Math.random()*800);
let yPos1 =Math.floor(Math.random()*600);
let xPos2 = Math.floor(Math.random()*800);
let yPos2 =Math.floor(Math.random()*600);
//velocity of point
xSpeed = -2;
ySpeed = -4;
xSpeed1 = 3;
ySpeed1 = 3;
xSpeed2 = -1;
ySpeed2 = 11;
//function to draw the point to the canvas
function draw() {
    stroke(Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    strokeWeight(4);
//If statements to detect if the point reaches a border
    if (xPos > 800){
        xSpeed *= -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (xPos < 0){
        xSpeed *= -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (yPos > 600){
        ySpeed *=  -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (yPos < 0){
        ySpeed *=  -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (xPos1 > 800){
        xSpeed1 *= -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (xPos1 < 0){
        xSpeed1 *= -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (yPos1 > 600){
        ySpeed1 *=  -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (yPos1 < 0){
        ySpeed1 *=  -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (xPos2 > 800){
        xSpeed2 *= -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (xPos2 < 0){
        xSpeed2 *= -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (yPos2 > 600){
        ySpeed2 *=  -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    if (yPos2 < 0){
        ySpeed2 *=  -1;
        fill (Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    }
    //Setting the position of the circle based on the variable outputs
    point(xPos,yPos)
    point(xPos1,yPos1)
    point(xPos2,yPos2)

//This advances the circle along the screen
    xPos = xPos + xSpeed;
    yPos = yPos + ySpeed;
    xPos1 = xPos1 + xSpeed1;
    yPos1 = yPos1 + ySpeed1;
    xPos2 = xPos2 + xSpeed2;
    yPos2 = yPos2 + ySpeed2;
}