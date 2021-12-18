function myFunction(parameter1) {
    var x = document.getElementById(parameter1);
	
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
    } else {
        x.style.visibility = 'hidden';
    }
}

function valuser (){
	 var a = document.getElementById("username").value;
	 if(a=== "") {
                                     return false; } 
}
function valemail (){
	 var a = document.getElementById("email").value;
	 if(a=== "") {
                                     return false; } 
}
