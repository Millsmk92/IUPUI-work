//Matthew K. Mills
//N220
// 4/16/2019
//personalComp

// Declare objects
let xPos = Math.floor(Math.random()*800);
let yPos =Math.floor(Math.random()*600);
xSpeed = -2;
ySpeed = -4;

var dot1;
var dot2;
var dot3;
var dot4;
var dot5;
var dot6;
var dot7;
var dot8;
var dot9;
var dot10;
//Sets up canvas
function setup() {
  createCanvas(800, 600);
  // Create object
  dot1 = new flyDot();
  dot2 = new flyDot();
  dot3 = new flyDot();
  dot4 = new flyDot();
  dot5 = new flyDot();
  dot6 = new flyDot();
  dot7 = new flyDot();
  dot8 = new flyDot();
  dot9 = new flyDot();
  dot10 = new flyDot();
}
//Function to draw each dot and corresponds to 
function draw() {
  background(0);
  
  dot1.move();
  dot1.display();
  dot2.move();
  dot2.display();
  dot3.move();
  dot3.display();
  dot4.move();
  dot4.display();
  dot5.move();
  dot5.display();
  dot6.move();
  dot6.display();
  dot7.move();
  dot7.display();
  dot8.move();
  dot8.display();
  dot9.move();
  dot9.display();
  dot10.move();
  dot10.display();
}

// object constructor for my super fly dots
// also has functions for the dots movement and a display function
class flyDot {
  constructor() {
    this.x = random(width);
    this.y = random(height);
    this.diameter = random(5, 15);
    this.speed = 1;
  }

  move() {
    this.x += random(-this.speed, this.speed);
    this.y += random(-this.speed, this.speed);
  }

  display() {
    circle(this.x, this.y, this.diameter, this.diameter);
    fill(Math.floor(Math.random() * 255),Math.floor(Math.random() * 255),Math.floor(Math.random() * 255));
  }
}
