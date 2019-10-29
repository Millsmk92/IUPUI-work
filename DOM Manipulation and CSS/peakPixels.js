//Matthew K. Mills
//N220
// 2/5/2019
//Peak Pixels
var greenDiv = 100
function addDiv() {
    let pix = document.getElementById("peakPixels");
    pix.style.width = greenDiv;
    pix.style.height = greenDiv;
    pix.classList.add("pixlist")
    pix.style.backgroundColor ="green";
}
function divClick() {
    greenDiv *=1.1;
    document.querySelector(".pixlist").style.height = greenDiv;
    document.querySelector(".pixlist").style.width = greenDiv;

}