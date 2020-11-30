<?php get_header(); ?>

  <main>
    <div class="container">

      <div class="row">

        <section class="col">





          <?php if(have_posts()) :while(have_posts()) : the_post();?>

          <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url('post_image');?>" alt="<?php the_title();?>" class="img-fluid">
          </a>

<?php endif;?>

<a href="<?php the_permalink(); ?>"><h1><?php the_title();?></h1></a>

<?php the_excerpt();?>
<?php endwhile; else: endif;?>





        </section>

      </div><!-- .row -->
    </div><!-- .container -->
  </main>

<?php get_footer(); ?>