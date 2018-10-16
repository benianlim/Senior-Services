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
