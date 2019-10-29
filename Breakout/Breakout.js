//Matthew K. Mills
//N220
// 4/22/2019
//Breakout

//some variables for the canvas,bricks, and score
let canvasWidth=400;
let canvasHeight=400;
let rows= 4;
let columns = 8;
let score = 0;

//let block = {}

//paddle variables
let paddle = {
    x:canvasWidth/2,
    y:canvasHeight-20,
    width: 80
}
//ball variables
let ball = {
    x:canvasWidth/2,
    y:canvasHeight-40,
    size:10,
    xSpeed:0,
    ySpeed:-3
}

function setup(){
    createCanvas(400, 400);
}
function draw() {
    background(0);
    drawPaddle();
    drawBall();
    borderCollider();
    paddleCollider();
    fill(255);
    textSize(30);
    text(score,50,50)
    ball.x = ball.x +ball.xSpeed;
    ball.y = ball.y +ball.ySpeed;
    //these are the key functionality for the left and right arrow keys
    if(keyIsDown(LEFT_ARROW)) {
        paddle.x = paddle.x -5
    }
    if(keyIsDown(RIGHT_ARROW)) {
        paddle.x = paddle.x +5
    }
}
//function to draw the paddle from pre defined paddle variables
function drawPaddle() {
    rect(paddle.x-paddle.width/2,paddle.y, paddle.width, 5)
}
//function to draw the paddle from pre defined ball variables
function drawBall() {
    ellipse(ball.x,ball.y,ball.size);
}
//This is the function to bounce the ball off all four walls
function borderCollider() {
    if(ball.y<0) {
        ball.ySpeed*=-1;
    }
    if(ball.y>=400) {
        ball.ySpeed*=-1;
    }
    if(ball.x<0) {
        ball.xSpeed*=-1;
    }
    if(ball.x>400) {
        ball.xSpeed*=-1;
    }
}
//this is the function to draw the paddle
//it checks basically checks to see if the ball is in an area that the paddle isnt
//if the ball doesnt collide with the paddle, nothing happens, otherwise it reverses the ball back up. the value of 25 that is subtracted
//from the canvas height is the space beneath the paddle plus the paddle height
function paddleCollider() {
    if(ball.y <canvasHeight-25) {
        return;
    }
    if(ball.x < paddle.x-paddle.width/2) {
        return;
    }
    if(ball.x > paddle.x+paddle.width/2) {
        return;
    }
    ball.xSpeed = (ball.x-paddle.x) / 10;
    ball.ySpeed = -ball.ySpeed;
}
//function drawBlock(block){

//}
//function drawRectangles() {
    //for(let i=0;i< ;i++){
        //drawBlock(level[i]);
    //}
//}