// JQuery Back To Top
$(document).ready(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });

  // scroll body to 0px on click
  $('#back-to-top').click(function () {
    $('#back-to-top').tooltip('hide');
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });

  $('#back-to-top').tooltip('show');

});


// jquery tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// jquery slide in/out option panel
$(document).ready(function () {
  $('#menu-toggle').click(function(){
    if($('#menu').hasClass('open')){
      $('#menu').removeClass('open');
      $('#menu-toggle').removeClass('open');
    }else{
      $('#menu').addClass('open');
      $('#menu-toggle').addClass('open');
    }
  });
});


// jquery button
$('.btn-toggle').click(function() {
  $(this).find('.btn').toggleClass('active');

  if ($(this).find('.btn-primary').size()>0) {
    $(this).find('.btn').toggleClass('btn-primary');
  }
  if ($(this).find('.btn-danger').size()>0) {
    $(this).find('.btn').toggleClass('btn-danger');
  }
  if ($(this).find('.btn-success').size()>0) {
    $(this).find('.btn').toggleClass('btn-success');
  }
  if ($(this).find('.btn-info').size()>0) {
    $(this).find('.btn').toggleClass('btn-info');
  }

  $(this).find('.btn').toggleClass('btn-default');

});
$('form').submit(function(){
  alert($(this["options"]).val());
  return false;
});



// jquery background overlay
jQuery(document).ready(function(){
  $("#overlaymenu").hover(function(){
    $('.bgsheet').fadeToggle();
  });
});


// jquery news ticker
$(function() {
  $('#newsticker').vTicker();
});
