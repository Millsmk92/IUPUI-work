//Matthew K. Mills
//N220
// 4/9/2019
//Bounce Off Rectangle

//This function defines the rectangle to be drawn
function drawRect(){
    fill(0, 0, 255);
    rect(400, 400, 200, 40 );
    }
//This function sets the canvas parameters and sets the circle starting pont
function setup(){
    createCanvas(800,600);
    fill(0, 150, 200);
}
let xPos = 10;
let yPos =30;
//velocity of circle
xSpeed = -5;
ySpeed = -5;
//function to draw the circle to the canvas
function draw() {
    background(255);
    stroke(0);
    strokeWeight(0);
    circle(xPos, yPos, 30);
//If statements to detect if the circle reaches a border
    if (xPos > 800){
        xSpeed *= -1;
    }
    if (xPos < 0){
        xSpeed *= -1;
    }
    if (yPos > 600){
        ySpeed *=  -1;
    }
    if (yPos < 0){
        ySpeed *=  -1;
    }
    //This advances the circle along the screen
    xPos = xPos + xSpeed;
    yPos = yPos + ySpeed;
//Next portion draws the rectangle and sets action to take place if the ball hits the rectangle
    drawRect();
    let HitTest = hitTestPoint(xPos, yPos, 400, 400, 220, 60)
        if(HitTest){
        xSpeed *= 1;
        ySpeed *= -1;
        }
//This next portion sets the parameters for the hit test which is if the ball enters the space the rectangle occupies.
function hitTestPoint(xPos, yPos, rectX, rectY, rectW, rectH) {
        if(xPos > rectX && xPos < rectX+rectW) {
            if(yPos > rectY && yPos < rectY+rectH) {
                return true;
            }
        }
        return false;
    }
}

