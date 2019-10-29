function setup() {
    createCanvas(800, 600);
    let place = 0;
    for(x = 0; x<5; x++ ) {
        place=place+50;
        //rect(50,place,50,50);
        triangle(30,place,30,place+20,86,place+10);
    }
        
}