<?php
/*Template Name: Contato
*/
 get_header();?>

<div class="container">
    

<div class="hero" id="hero" style="background-image: url('<?php the_post_thumbnail_url('post_image');?>')">
  
      
      <h3><?php echo the_title();?></h3>


  </div>


  <div class="row">
    <div class="col-12">
      <div class="pages-txtbox">
    <h2>Venha nos conhecer!</h2>
    <p>Temos duas lojas físicas prontas para recebe-lô.</p>
    
    </div>
    </div>
  </div>
</div>


	<div class="container">
		<div class="row">
			
		<div class="col-12 col-sm-6">
			<address>
			<h2>Loja Campo Limpo Pta.</h2>
			<a href="">Av. Adherbal da Costa Moreira, 364<br> Campo Limpo Pta - SP</a>
		</address>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.097172719872!2d-46.78984878539295!3d-23.20312905434464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cedff8291521e5%3A0x258830b69a552a95!2sTrevisan%20Alian%C3%A7as!5e0!3m2!1spt-BR!2sbr!4v1603231351950!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	
</div>
	<div class="col-12 col-sm-6">
		<address>
			<h2>Loja Shopping Araguaia</h2>
			<a href="">Av. Duque de Caxias, 2225<br>Sítio do Moinho, Várzea Paulista – SP<br>cep : 13223-025 </a>
		</address>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.9457977621732!2d-46.81430018539289!3d-23.208645854545445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cedfc1cf725eaf%3A0x37a629a9b1eb3e5b!2sShopping%20Araguaia!5e0!3m2!1spt-BR!2sbr!4v1603231292374!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


			
	
</div>

<div class="col-12">
	
</div>

</div> 
</div>
		
<section class="faixa-contato">
		<div class="container">	
				<div class="row">	
						<div class="col-12">
							<div class="box-contato">
								<h2>Contatos</h2>
								<ul>
									<li><a href=""><i class="fa fa-phone fa-2x"></i>(11) 4039-1477</a></li>
									<li><a href="mailto:trevisanaliancas@gmail.com"><i class="fa fa-envelope-o fa-2x"></i>trevisanaliancas@gmail.com</a></li>
									<li><a href="mailto:sac@trevisanaliancas.com.br"><i class="fa fa-envelope-o fa-2x"></i>sac@trevisanaliancas.com.br</a></li>

								</ul>
								</div>
							</div>

							<div class="col-12">
								<div class="box-socials">
								<h2>Redes Sociais</h2>
								<ul>
									<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.png"></a></li>
									<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/img/instagram.png"></a></li>
									<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/img/youtube.png"></a></li>
									<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/img/whatsapp.png"></a></li>
								</ul>
							</div>
							</div>
				</div>	
		</div>		
</section>


<?php get_footer();?>