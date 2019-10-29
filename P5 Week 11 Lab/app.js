//Matthew K. Mills
//N220
// 03/28/2019
//Week 11 Lab Assignment
function setup(){
    createCanvas(800,600);
    background(0);
    fill(0, 150, 200);
}
count=0
idx=0
let colors = ["#FF0000","#00FF00","#00FFFF","#0000FF"];

function draw(){{
    count++;
    if(count>=15){
        count= 0;
        idx++;
        if(idx>= colors.length){
            idx=0
        }
console.log(count)

    }
fill(colors[idx]);
noStroke();
rect(100,100,200,200);
}
}