<?php get_header();?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <!-- Slide One - Set the background image for this slide in the line below -->
    <div class="carousel-item active" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/cta1.jpg')">
      <div class="carousel-caption d-none d-md-block">



      </div>
    </div>
    <!-- Slide Two - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/cta2.jpg')">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
    <!-- Slide Three - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/cta3.jpg')">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
  </div>
  </div>

</div>

<div class="container">
  <div class="row">
    

<?php get_footer();?>