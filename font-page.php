<?php
// Template Name: Front-Page
get_header(); ?>

      
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
       
        <div class="carousel-item active" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta1.jpg')">
          <div class="carousel-caption d-none d-md-block">

  
        
          </div>
        </div>
       
        <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta2.jpg')">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
      
        <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta3.jpg')">
          <div class="carousel-caption d-none d-md-block">
          
          </div>
        </div>
      </div>
     
    </div>
  
 
   

<?php get_footer(); ?>