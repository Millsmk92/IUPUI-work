//Matthew K. Mills
//N220
// 4/2/2019
//Random Walk
var dots= [];
function setup(){
    createCanvas(800,600);
    background(0)
//for loop places the 20 circles on the screen with random starting points for width and height
    for(i=0; i<20; i++){
        var x = random(width);
        var y = random(height);
        var r = i+1;
        dots[i] = new circles(x,y,r);
    }
}
//draw function with calls to the constructor function's various outputs
function draw(){
    background(0);
//Personal modification for the fill color so that the color of the circles is different for each draw
    fill(random(255),random(255),random(255))
    for(i=0; i<dots.length; i++){
       dots[i].move();
       dots[i].display();
    }
}
//Constructor function for the circles
function circles(tempX,tempY,tempDiameter){
    this.x = tempX;
    this.y = tempY;
    this.diameter = tempDiameter;

//.move controls the movement of the circles, can move 5 pixels in any direction per draw
    this.move = function() {
        this.x += random(-5,5);
        this.y += random(-5,5)
    };
//.display is the function that puts the circles on the page
    this.display = function(){
        circle(this.x,this.y,this.diameter);
    }

}
