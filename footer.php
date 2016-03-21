<section id="contact" class="content-section">

<div align="center">
  <img src="<? echo get_template_directory_uri() ?>/assets/images/band.png" class="blocknoteband">
</div>

<footer>

<div class="content post novisible visible animated fadeIn">
  <div>
    <div class="container">
      <p class="text-center"><img src="<? echo get_template_directory_uri() ?>/assets/images/band-logo-white.png" width="130"></p>
      <p class="navbar-brand">BLOCKNOTE</p>
      <div class="marginbottom text-center">
        <h4>Musical Web Template for Personal / Band</h4>
      </div><br />

      <div class="col-lg-6">
        <h3><span class="light">Our</span> Address</h3>
        <p>
        <div class="media-left">
          <a href="#"><img src="<? echo get_template_directory_uri() ?>/assets/images/band-logo-white.png" width="60"></a>
        </div>
        <div class="media-body">
          <address>
            Blocknote Fan Base<br />
            795 Folsom Ave, Suite 600 San Francisco, CA 94107<br />
            Phone: (123) 456-7890 | email: <a href="mailto:#" data-original-title="email us">first.last@gmail.com</a>
          </address>
        </div>
        </p>
        <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
      </div>

      <!--<div class="col-lg-3">
        <h3><span class="light">News</span> Archives</h3>
        <ul class="list list-unstyled">
          <li>
          <a href="">&#8250;&nbsp;&nbsp;Raw denim you probably heard.</a>
          <p><small class="white"><?php echo date("l, d m Y"); ?> / by <a href="">john doe</a> / <a href="">article</a>, <a href="">video</a></small></p>
          </li>
          <li>
          <a href="">&#8250;&nbsp;&nbsp;Nesciunt tofu stumptown aliqua.</a>
          <p><small class="white"><?php echo date("l, d m Y"); ?> / by <a href="">diane susan</a> / <a href="">article</a>, <a href="">video</a></small></p>
          </li>
          <li>
          <a href="">&#8250;&nbsp;&nbsp;Mustache cliche carles helvetica.</a>
          <p><small class="white"><?php echo date("l, d m Y"); ?> / by <a href="">jane michael</a> / <a href="">article</a>, <a href="">video</a></small></p>
          </li>
        </ul>
      </div>-->

      <div class="col-lg-2">
        <h3><span class="light">Our</span> Pages</h3>
        <ul class="list list-unstyled">
          <li><a href="">&#8250;&nbsp;&nbsp;About Blocknote</a></li>
          <li><a href="">&#8250;&nbsp;&nbsp;Schedule Events</a></li>
          <li><a href="">&#8250;&nbsp;&nbsp;Photo Gallery</a></li>
          <li><a href="">&#8250;&nbsp;&nbsp;Merchandise Shop</a></li>
          <li><a href="">&#8250;&nbsp;&nbsp;Forum</a></li>
          <li><a href="">&#8250;&nbsp;&nbsp;Sitemap</a></li>
          <li><a href="">&#8250;&nbsp;&nbsp;Contact Us</a></li>
        </ul>
      </div>

      <div class="col-lg-4">
        <h3><span class="light">We Are</span> Social</h3>
        <?php get_template_part('partials/components/social-media'); ?>
        <h3><span class="light">Find</span> Us</h3>
        <a href=""><img src="<? echo get_template_directory_uri() ?>/assets/images/App_Store_badge.png" width="100" /></a>&nbsp;&nbsp;<a href=""><img src="<? echo get_template_directory_uri() ?>/assets/images/Android_badge.png" width="100" /></a>&nbsp;&nbsp;<a href=""><img src="<? echo get_template_directory_uri() ?>/assets/images/Amazon_badge.png" width="100" /></a>

      </div>

    </div>

    <p class="margintop text-center">Copyright &copy; <?php echo date("Y"); ?>. All rights reserved. <a href="./">Blocknote 3.0</a> HTML Template design by <a href="../">bnrcreativelab.com</a><br />
    <a href="">Privacy Policy</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">Terms &amp; Conditions</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">Privacy guidelines</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">About Us</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">Explore Our Community</a>.</p>

  </div>
</div>

</footer>

</section>

<!-- Back To Top -->
<a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Return to the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<? get_template_part('partials/page-elements/option-panel'); ?>

<div class="bgsheet hideout"> </div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<? echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<script src="<? echo get_template_directory_uri() ?>/assets/js/jquery.easing.min.js"></script>
<script src="<? echo get_template_directory_uri() ?>/assets/js/docs.min.js"></script>
<script src="<? echo get_template_directory_uri() ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<? echo get_template_directory_uri() ?>/assets/js/ie-emulation-modes-warning.js"></script>

<script src="<? echo get_template_directory_uri() ?>/assets/js/parallax.min.js"></script>

<!-- JQuery Gallery Expand Content -->
<script src="<? echo get_template_directory_uri() ?>/assets/js/modernizr.custom.js"></script>
<script src="<? echo get_template_directory_uri() ?>/assets/js/toucheffects.js"></script>

<!-- JQuery top menu scroll Javascripts -->
<script src="<? echo get_template_directory_uri() ?>/assets/js/navigation.js"></script>

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
<script src="<? echo get_template_directory_uri() ?>/assets/js/jquery.ticker.js"></script>

<script>
  $(function() {
    $('#newsticker').vTicker();
  });
</script>

<? wp_footer(); ?>
