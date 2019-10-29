//Matthew K. Mills
//4/30/2019
//Final Exam 1
//Create a program with that draws a line from
// the last point clicked to the current point 
//clicked every time the mouse is clicked. 
//Start at point 0,0 for your first click.

//canvas creation and background color.
let oldX = 0;
let oldY = 0;

function setup() {
    createCanvas(800,600);
    background(235);
}
function draw() {
    mouseClicked(true);
    line(oldX,oldY,newX,newY);
}
//detection for when mouse is clicked and its location
function mouseClicked() {
    if (oldX=0){
        newX = mouseX
    } else {
        newX = mouseX
    }
    if (oldY=0){
        newY = mouseY
    } else {
        newY= mouseY
    }
}