<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">



  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $descricao; ?>">
  <meta name="author" content="<?php echo $autor ?>">
  <title><?php the_title(); ?></title>
  <meta name="googlebot" content="index,follow">
  <meta name="theme-color" content="#111111" />
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="<?php echo $meta_keys ?>">
  <meta property="publisher" content="<?php echo $publicante ?>">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:region" content="Brasil">
  <meta property="og:site_name" content="<?php echo $nome_site ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header class="fixed-top">
<div class="container-fluid" style="padding:0; margin:0;">
<div class="row">
        <div class="col-12 col-sm-4">
          <a target="_blank" href=""><img class="logo-topo" style="" src="<?php echo get_stylesheet_directory_uri();?>/img/logo_branco.png" alt="logo"></a>
        </div>
   
      
		
<div class="col-12 col-sm-7">
      <nav class="navbar navbar-expand-md">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https:/casariniproducoes.com.br/">página inicial<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://.com.br">portfólio</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="https://.com.br">parceiros</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="https://.com.br/">contato</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="https://.com.br">blog</a>
          </li>
         
        </ul>
      </div>
    </nav>
    </div>
    <div class="col-12 col-sm-1">
      <ul class="icones-social-media">
        <li><a target="_blank" href=""><img src="<?php echo  get_stylesheet_directory_uri();?>/img/facebook.png" alt="/img/facebook.jpg"></a></li>
        <li><a target="_blank" href=""><img src="<?php echo  get_stylesheet_directory_uri();?>/img/instagram.png" alt="/img/instagram.jpg" alt=""></a></li>
        <li><a target="_blank" href=""><img src="<?php echo  get_stylesheet_directory_uri();?>/img/linkedin.png" alt="/img/linkedin.jpg" alt=""></a></li>
      </ul>
    </div>
    </div>
</div>
</div>
</header>


