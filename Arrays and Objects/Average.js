//Matthew K. Mills
//N220
// 2/12/2019
//Average
let stepCount = [16,22,20,30]
let total = 0
for(x=0; x<stepCount.length; x++) {
    total += stepCount[x];
    }
document.write(total + " ");
let avg = total/stepCount.length;
document.write(avg);