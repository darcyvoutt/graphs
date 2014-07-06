$(document).ready(function() {
  $('.profile-value').each(function() {
     var dataWidth = $(this).data('value');
     $(this).css("width", (dataWidth * 10) + "%");
  });
});