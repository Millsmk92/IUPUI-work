//Matthew K. Mills
//N220
// 1/17/2019
//FizzBuzz
for(var fb = 1; fb <= 100; fb++)
{
    if (fb % 15 == 0) {
        console.log("FizzBuzz");
    } else if (fb % 5 == 0) {
        console.log("Buzz");
    } else if (fb % 3 == 0) {
        console.log("Fizz");
    } else {
        console.log(fb);
    }
}



