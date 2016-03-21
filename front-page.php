  <? get_header(); ?>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="landingpage">
  <div id="landingpage">

    <? include("partials/components-js/01-modalbox.php"); ?>

    <? get_template_part('menu'); ?>
    <? get_template_part('topcontent', 'slideshow'); ?>

    <? include("partials/light-bg/01-about.php"); ?>
    <? include("partials/parallax-bg/02-about-this-web.php"); ?>
    <? include("partials/light-bg/04-discography.php"); ?>

    <? get_footer(); ?>

  </div>

</body>
</html>

