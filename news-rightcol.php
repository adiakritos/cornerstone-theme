<div class="sidebar-module sidebar-module-inset">
  <h4>Search</h4>
  <?php include("../assets/HTML-page-elements/06-search.html"); ?>
</div>

<div class="sidebar-module">
  <h4>About</h4>
  <div class="media-left">
    <a href="#"><img src="../assets/images/band-logo.png" width="72"></a>
  </div>
  <div class="media-body">
    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>
</div>

<div class="sidebar-module">
  <h4>Tags</h4>
  <ul class=" list-unstyled list-inline tags">
    <li><a href="#"><span class="label label-default">Default</span></a></li>
    <li><a href="#"><span class="label label-primary">Primary</span></a></li>
    <li><a href="#"><span class="label label-success">Success</span></a></li>
    <li><a href="#"><span class="label label-info">Info</span></a></li>
    <li><a href="#"><span class="label label-warning">Warning</span></a></li>
    <li><a href="#"><span class="label label-danger">Danger</span></a></li>
  </ul>
</div>

<div class="sidebar-module">
  <h4>Archives</h4>
  <ol class="list-unstyled archive">
    <li><a href="#">March 2015</a></li>
    <li><a href="#">February 2015</a></li>
    <li><a href="#">January 2015</a></li>
    <li><a href="#">December 2014</a></li>
    <li><a href="#">November 2014</a></li>
    <li><a href="#">October 2014</a></li>
    <li><a href="#">September 2014</a></li>
  </ol>
</div>

<div class="sidebar-module">
  <h4>Posts</h4>

  <!-- tab start -->
  <ul id="myTab" class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#home" role="tab" data-toggle="tab">Latest</a></li>
    <li><a href="#profile" role="tab" data-toggle="tab">Popular</a></li>
  </ul>

  <div id="myTabContent" class="margintop tab-content">
    <div class="tab-pane fade in active" id="home">
      <ul class="list-unstyled">
        <li><p><a href="">Raw denim you probably haven't heard of.</a>
        <small><?php echo date("D, d / m / Y"); ?>&nbsp;/&nbsp;<a href="">article</a>, <a href="">video</a></small></p>
        </li>
        <li><p><a href="">Nesciunt tofu stumptown aliqua.</a>
        <small><?php echo date("D, d / m / Y"); ?>&nbsp;/&nbsp;<a href="">article</a>, <a href="">video</a></small></p>
        </li>
        <li><p><a href="">Mustache carles vegan helvetica.</a>
        <small><?php echo date("D, d / m / Y"); ?>&nbsp;/&nbsp;<a href="">article</a>, <a href="">video</a></small></p>
        </li>
      </ul>
    </div>
    <div class="tab-pane fade" id="profile">
      <ul class="list-unstyled">
        <li><p><a href="">Nesciunt tofu stumptown aliqua.</a>
        <small><?php echo date("D, d / m / Y"); ?>&nbsp;/&nbsp;<a href="">article</a>, <a href="">video</a></small></p>
        </li>
        <li><p><a href="">Mustache carles vegan helvetica.</a>
        <small><?php echo date("D, d / m / Y"); ?>&nbsp;/&nbsp;<a href="">article</a>, <a href="">video</a></small></p>
        </li>
        <li><p><a href="">Raw denim you probably haven't heard of.</a>
        <small><?php echo date("D, d / m / Y"); ?>&nbsp;/&nbsp;<a href="">article</a>, <a href="">video</a></small></p>
        </li>
      </ul>
    </div>
  </div>
  <!-- tab end -->
</div>
