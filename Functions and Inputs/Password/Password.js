//Matthew K. Mills
//N220
//1/29/2019
//Password Protection
function Verify(){
    var username =document.getElementById("username").value;
    var password=document.getElementById("password").value;

    if((username == "Username") && (password == "Password")){
        document.getElementById("Protection").innerHTML="Success";
    }
    else{
        document.getElementById("Protection").innerHTML="Wrong information";
    }
};