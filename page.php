<?php get_header();?>

<div class="content woocommerce">
	<div class="container">
		<div class="row">
			
		<div class="col-12">
			
			
			
    <?php the_post_thumbnail_url('post-image');?>

        <?php if(have_posts()) : while(have_posts())  : the_post();?>

        <?php the_content();?>

<?php endwhile; else: endif;?>

</div>

</div> 
</div>
		
	</div>


<?php get_footer();?>A