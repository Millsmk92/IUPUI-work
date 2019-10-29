//Matthew K. Mills
//N220
// 3/26/2019
//Ball Bounce
function setup(){
    createCanvas(800,600);
    fill(0, 150, 200);
}
let xPos = Math.floor(Math.random()*800);
let yPos =Math.floor(Math.random()*600);
//velocity of shape
xSpeed = -2;
ySpeed = -2;
//function to draw the circle to the canvas
function draw() {
    background(255);
    stroke(Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
    strokeWeight(4);
//If statements to detect if the circle reaches a border
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
    //Setting the position of the circle based on the variable outputs
    circle(xPos, yPos, 30);
//This advances the circle along the screen
    xPos = xPos + xSpeed;
    yPos = yPos + ySpeed;
}