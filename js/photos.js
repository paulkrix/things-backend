$('.navbar-collapse').on('show.bs.collapse', function() { 
  $('.navbar').css('background-color', '#fff');
});
$('.navbar-collapse').on('hide.bs.collapse', function() { 
  $('.navbar').css('background-color', 'rgba(255,255,255,0.7)');
});

$(document).ready(function() {
  $('.modal').on('hidden.bs.modal', function(e) {
    var parent = $(this).attr('data-parent');
    if (typeof parent !== typeof undefined && parent !== false) {
      $(document.body).addClass('modal-open');
    }
  });
});
