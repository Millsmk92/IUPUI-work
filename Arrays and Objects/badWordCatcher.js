//Matthew K. Mills
//N220
// 2/12/2019
//Bad word catcher
function Verify() {
    let input = document.getElementById("userInput").value;
    let splitInput = input.split(" ")
    let sumBad = 0
for(u = 0; u < splitInput.length; u++) {
    if(splitInput[u] == "legos"||
        splitInput[u] == "cloud"||
        splitInput[u] == "manifold"){
            sumBad += 1;
        }
    } document.getElementById("badWords").innerHTML = sumBad + " " + "Bad words were found!";
    document.getElementById("userInput").value = " ";
}