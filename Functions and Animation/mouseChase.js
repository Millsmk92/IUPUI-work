//Matthew K. Mills
//N220
// 4/9/2019
//Mouse Chase
var superMassiveBlackHole = {x:200,y:200,direction:{x:0,y:0}};

function setup() {
    createCanvas(800,600);
}
//The second function is the distance calculation
function Distance (x1,y1,x2,y2){
    a=x1-x2;
    b=y1-y2;
    return Math.sqrt(a*a +b*b);
}
//This third function sets some of the canvas and circle attributes,
//as well as checking if the distance is less than 7 and changes
//the color of the circle if the distance is less than 7
function draw(){
    clear();
    background(60);
    fill(0);
    strokeWeight(0)
if(Distance(mouseX, mouseY, superMassiveBlackHole.x,superMassiveBlackHole.y) <7 ){
    fill(255,0,0);
    } else {
    fill(0);
    }
//The next portion draws an ellipse to the screen from the predefined variable superMassiveBlackHole,
//sets the direction for the circle to travel, and advances it towards the mouse point by 3 pixels each frame
    ellipse(superMassiveBlackHole.x,superMassiveBlackHole.y,40);
    superMassiveBlackHole.direction.x = mouseX-superMassiveBlackHole.x;
    superMassiveBlackHole.direction.y = mouseY-superMassiveBlackHole.y;
    superMassiveBlackHole.x += superMassiveBlackHole.direction.x *.03;
    superMassiveBlackHole.y += superMassiveBlackHole.direction.y *.03;
}