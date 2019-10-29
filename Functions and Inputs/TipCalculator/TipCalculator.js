//Matthew K. Mills
//N220
//1/29/2019
//TipCalculator
function Calculate(){
    var billAmt=document.getElementById("billAmt").value;
    billAmt = parseFloat(billAmt);
    var tipTot= billAmt*.15;
    var billTot = billAmt + tipTot;

   console.log("Tip: $" + tipTot + " " +  "Total: $" + billTot );
}