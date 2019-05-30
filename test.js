$(document).ready(function() {
   $('[data-toggle="popover1"]').popover({
      placement: 'bottom',
      trigger: 'hover'
   });
   $('[data-toggle="popover"]').popover({
      placement: 'top',
      trigger: 'hover'
   });
});