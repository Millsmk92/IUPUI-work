//Matthew K. Mills
//N220
// 1/29/2019
//Distance Calculator
function Calculate(){
    var x1=document.getElementById("x1").value;
    x1=parseFloat(x1);
    var y1=document.getElementById("y1").value;
    y1=parseFloat(y1);
    var x2=document.getElementById("x2").value;
    x2=parseFloat(x2);
    var y2=document.getElementById("y2").value;
    y2=parseFloat(y2);

    var diffx = x2-x1
    if(diffx <0)
    diffx *= -1

    var diffy = x2-x1
    if(diffy <0)
    diffy *= -1
    var finalDistance = Math.sqrt(diffx*diffx + diffy*diffy)
    console.log(finalDistance)
    document.getElementById("Calculation").innerHTML=finalDistance;
};