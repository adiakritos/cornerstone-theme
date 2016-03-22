<section id="contact" class="content-section">

<div align="center">
  <img src="<? echo get_template_directory_uri() ?>/assets/images/band.png" class="blocknoteband">
</div>

<footer>

    <div class="content post novisible visible animated fadeIn">
      <div>
        <div class="container">
          <div class="col-lg-6">
            <h3><span class="light">Our</span> Address</h3>
              <div class="media-body">
                <address>
                  16010 Annapolis Road Bowie Maryland 20715<br />
                  Phone: (301) 262.6266 | Email: <a href="mailto:info@cag.org" data-original-title="email us">info@cag.org</a>
                </address>
              </div>
          </div>

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
          </div>

        </div>

      </div>
    </div>

    <div class="copyright-container">
      <p class="text-center">
        <a href="">Privacy Policy</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">Terms &amp; Conditions</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">Privacy guidelines</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">About Us</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="">Explore Our Community</a><br />
        Copyright &copy; <?php echo date("Y"); ?>. All rights reserved. <a href="./">
      </p>
    </div>

</footer>

</section>

<!-- Back To Top -->
<a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Return to the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="bgsheet hideout"> </div>

<? wp_footer(); ?>
