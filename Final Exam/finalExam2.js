//Matthew K. Mills
//4/30/2019
//Final Exam Problem 2

//Using an array of 3 numbers (10,20,40), 
//draw 3 circles on the screen using those sizes
//as the circle's radii. Also use these numbers in 
//the array as the x and y location of the circle. 
//Thus, the first circle should be at 10,10. 
//You must use a looping structure for this - 
//there should only be one call to circle() or ellipse()

//set up my array values
let myArray = [10,20,40];
//function setup for the canvas and background
function setup() {
    createCanvas(800,600);
    background(235);
}
//draw function
function draw() {
    //need looping for array position
    for (let i = 0; i<2;i++){
        myArray[i]
        }
    circle();
    frameRate(5);
}

//need circle function
function circle(){
    circle(myArray[i],myArray[i],myArray[i])
    fill(0);
}