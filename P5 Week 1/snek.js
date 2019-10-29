let xPositions= [];

function setup() {
    createCanvas(600,300);
    fill(255, 12, 129);
}
function draw() {
    background(0);
    if(xPositions.length > 10) {
        xPositions.shift();
    }
    xPositions.push(mouseX);
    for(var i = 0; i < xPositions.length; i++) {
        circle(xPositions[i],10, i*5);
    }
}