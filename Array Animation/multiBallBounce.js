//Matthew K. Mills
//N220
// 4/1/2019
//Multiple Ball Bounce
function setup(){
    createCanvas(800,600);
}
let xPos = [0,400,700];
let yPos = [0,300,500];
//velocity of circles
let xSpeed = [3,3,-3];
let ySpeed = [3,-3,-3];
let speed = [-1];
//function to draw the circles to the canvas
function draw() {
    background(0);
    for(x=0; x<xPos.length; x++){
        xPos[x]+=xSpeed[x];
        yPos[x]+=ySpeed[x];
        fill(0,255,255);
    
//Setting the position of the circle based on the variable outputs in the array
        circle(xPos[x], yPos[x], 30);
    }
//If statements to detect if the circle reaches a border
        if (xPos[0] > 800){
        xSpeed[0] *= speed[0];
        }
        else if (xPos[0] < 0){
        xSpeed[0] *= speed[0];
        }
        if (yPos[0] > 600){
        ySpeed[0] *=  speed[0];
        }
        else if (yPos[0] < 0){
        ySpeed[0] *=  speed[0];
        }
        if (xPos[1] > 800){
            xSpeed[1] *= speed[0];
            }
            else if (xPos[1] < 0){
            xSpeed[1] *= speed[0];
            }
            if (yPos[1] > 600){
            ySpeed[1] *=  speed[0];
            }
            else if (yPos[1] < 0){
            ySpeed[1] *=  speed[0];
            }
            if (xPos[2] > 800){
                xSpeed[2] *= speed[0];
                }
                else if (xPos[2] < 0){
                xSpeed[2] *= speed[0];
                }
                if (yPos[2] > 600){
                ySpeed[2] *=  speed[0];
                }
                else if (yPos[2] < 0){
                ySpeed[2] *=  speed[0];
                }
            }