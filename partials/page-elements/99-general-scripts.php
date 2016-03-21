<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/docs.min.js"></script>
<script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="../assets/js/ie-emulation-modes-warning.js"></script>

<!-- JQuery Gallery Expand Content -->
<script src="../assets/js/modernizr.custom.js"></script>
<script src="../assets/js/toucheffects.js"></script>


<!-- JQuery top menu scroll Javascripts -->
<script src="../assets/js/navigation.js"></script>

<!-- JQuery Back To Top -->
<script>
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
</script>

<!-- jquery tooltip -->
<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<!-- JQuery Style Switcher -->
<script src="../assets/js/styleswitcher.js"></script>


<!-- jquery slide in/out option panel -->
<script type="text/javascript">
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
</script>

<!-- jquery button -->
<script>
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
</script>

<!-- jquery background overlay -->
<script>
jQuery(document).ready(function(){
$("#overlaymenu").hover(function(){
    $('.bgsheet').fadeToggle();
});
});
</script>

<!-- jquery news ticker -->
<script src="../assets/js/jquery.ticker.js"></script>

<script>
$(function() {
  $('#newsticker').vTicker();
});
</script>
