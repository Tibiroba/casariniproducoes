<?php 
/*
Template Name: Institucional
*/
get_header();?>

<div class="container">
		

<div class="hero" id="hero" style="background-image: url('<?php echo the_post_thumbnail_url('post_image');?>')">
	
			
			<h3><?php echo the_title();?></h3>


	</div>


	<div class="row">
		<div class="col-12">
			<div class="pages-txtbox">
		<h2>Sobre Nós</h2>
		<p>Nossos idealizadores tem mais de dez anos de experiència no ramo de fornecimento de alianças para o atacado, sempre visando a qualidade de seus produtos e serviços assim como o a competitivdade no preço.</p>
		<p>Há pouco mais de dois anos no mundo virtual, nossa equipe trabalha para trazer a mesma qualidade e preço justo que sempre ofereceremos no para nossos clientes do atacado.</p>
		</div>
		</div>
	</div>
</div>
<section class="faixa-ins">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-4">
				<ul>
					<li><h3>Missão</h3></li>
					<li><i class="fa fa-globe fa-4x"></i></li>
					<li><span>Trazer qualidade, sutileza e elegânia em todas as nossas alianças para nossos clientes.</span></li>	
			</div>
			<div class="col-12 col-sm-4">
				<ul>
					<li><h3>Visão</h3></li>
					<li><i class="fa fa-eye fa-4x"></i></li>
					<li><span>Se tornar a maior refêrencia em alianças em todo o Brasil, levando, sempre, qualidade e preço justo.</span></li>
				</ul>
			</div>
			<div class="col-12 col-sm-4">
				<ul>
					<li><h3>Valores</h3></li>
					<li><i class="fa fa-handshake-o fa-4x"></i></li>
					<li><span>Qualidade, preço justo e comprometimento com nossos clientes.</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="cta-ins">
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6">
			<div class="ins-title">
		<h2>Trevisan Alianças</h2>
		<p>Qualidade e preço justo.</p>
		</div>
		</div>
		<div class="col-12 col-sm-6">
			<img src="<?php echo get_stylesheet_directory_uri();?>/img/screenshot.png" class="img-fluid" style="border-radius:20px;">
		</div>
		<div class="col-12 col-md-4">
			<ul>
				<li><h4>+ de 10</h4></li>
				<li><span>anos de história</span></li>
				<p>Trazendo alianças de qualidade e preço justo para nossos clientes</p>
			</ul>
		</div>
		<div class="col-12 col-md-4">
			<ul>
				<li><h4>+ de 1000</h4></li>
				<li><span>clientes satisfeitos</span></li>
				<p>Em pouco mais de 2 anos dentre nossas lojas físicas e virtuais</p>
			</ul>
		</div>
		<div class="col-12 col-md-4">
			<ul>
				<li><h4>+ de 300</h4></li>
				<li><span>pares de alianças</span></li>
				<p>A Satisfação de nossos clientes e o bom atendimento é nosso forte.</p>
			</ul>
		</div>
		<div class="col-12">
			<div class="ins-contato">
			<p>Venha nos conhecer!</p>
			<a href="btn-contato">Contato</a>
			</div>
		</div>
	</div>
</div>
</section>

	


<div class="content">


        <?php if(have_posts()) : while(have_posts())  : the_post();?>
        
        <?php the_content();?>

<?php endwhile; else: endif;?>



</div> 



<?php get_footer();?>