 $(document).ready(function(){
    $('.one, .two').click(function() {
      $(this).slideToggle({
        easing: 'linear'
      });
    });

 
});


$(function() {
  //Check it the user has been accpeted the agreement
  if (window.localStorage.getItem('accepted')) {
    $("#popup").show();
  }

  $('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    window.localStorage.setItem('accepted', true);

    e.preventDefault();
  });
});
