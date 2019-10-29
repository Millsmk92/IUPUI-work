//Matthew K. Mills
//N220
// 2/5/2019
//The Triangle
var redBoxMeasurements = 50
function addDiv() {
    for(x=0; x<3; x++){
    let tri = document.createElement("div");
    tri.style.width = redBoxMeasurements + "px";
    tri.style.height = redBoxMeasurements + "px";
    tri.style.backgroundColor = "red";
    document.body.appendChild(tri);
    tri.style.margin ="10px";
    
    redBoxMeasurements +=50


    }

}