  <? get_header(); ?>

  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="landingpage">
    <div id="landingpage">
      <? get_template_part('partials/components-js/modalbox.php'); ?>
      <? get_template_part('menu'); ?>
      <? get_template_part('topcontent', 'slideshow'); ?>
      <? get_template_part('partials/light-bg/light', 'about'); ?>
      <? get_template_part('partials/parallax-bg/parallax', 'about-this-web'); ?>
      <? get_template_part('partials/light-bg/light', 'discography'); ?>
      <? get_footer(); ?>
    </div>
  </body>
</html>
