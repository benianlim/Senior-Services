//This segment displays the validation rule for name text field.
function inputAlphabet(inputtext, alertMsg){
var alphaExp = /^[a-zA-Z]+$/;
if(inputtext.value.match(alphaExp)){
return true;
}else{
document.getElementById('p1').innerText = alertMsg;
inputtext.focus();
return false;
}
}
