$(document).ready(function() {
  $('input[type=radio]').change(function() {
    var current = $('input[value="serviceProvider"]').is(':checked');
    if (current) {
      $('input[type=checkbox]').prop('disabled', false);
    } else {
      $('input[type=checkbox]').prop({
        'disabled': 'disabled',
        'checked': false
      });
    }
  });
});

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
