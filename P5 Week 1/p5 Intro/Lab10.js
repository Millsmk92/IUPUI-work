//Matthew K. Mills
//N220
//3/19/2019
//Lab Week 10
let xPos = 0;
let circleRadius = 3
function draw() {
    createCanvas(800, 600);
    background(255);
    xPos+= .48;
    circleRadius+=.02;
    fill(255,0,0);
    circle(xPos, 200, circleRadius);
    

}