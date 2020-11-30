<?php 
/* Template Name: page-servicos*/
get_header();
?>
<div class="container">
    

<div class="hero" id="hero" style="background-image: url('<?php the_post_thumbnail_url('post_image');?>')">
  
      
      <h3><?php echo the_title();?></h3>


  </div>


  <div class="row">
    <div class="col-12">
      <div class="pages-txtbox">
    <h2>Serviços</h2>
    <p>Tire suas dúvidas e saiba tudo que podemos fazer por você.</p>
    
    </div>
    </div>
  </div>
</div>

<section class="serviços">

<div class="container">
  <div class="row">
    
 
<button class="accordion">gravações</button>
<div class="panel">
  <h3>gravações</h3>
  <p>Todas as alianças compradas em pares na Trevisan Alianças vêm com gravação inclusa.<br> 
A gravação que é fornecida pela Trevisan Alianças é no formato: “Nome” e “Data”.<br>
Quaisquer serviços que diferem desdes citados deverão ser consultados.</p>
</div>

<button class="accordion">anéis personalizados</button>
<div class="panel">
  <h3>anéis personalizados</h3>
  <p>Entre me contato para saber sobre nossa disponibilidade de anéis personalizados, como anéis de time entre outros.</p>
</div>

<button class="accordion">trocas e devoluções</button>
<div class="panel">
  <h3>trocas e devoluções</h3>
  <p>A Trevisa Alianças tem um política de 15 dias para trocas.<br>Após o pagamento, e sua confirmação via dados cadastrais, a mercadoria será enviada de acordo com os prazos das transportadoras.  </p>
</div>

<button class="accordion">entrega</button>
<div class="panel">
  <h3>entrega</h3>
  <p>A trevisan alianças trabalha com o prazo estipulado pela transportadora responsável,  tendo responsabilidade de despachar o produto em até 2 dias utéis.<br>Qualquer atraso após o período de entrega da empresa contratada e de responsabilidade dela.</p>
</div>

<button class="accordion">como medir suas alianças</button>
<div class="panel">
  <h3>como medir sua aliança</h3>
  <p>Existem diversar formas, de medir o tamanho de sua alianças, sendo o mais simples deles utilizando um barbante pequeno, e passando em volta do dedo, e medindo logo em seguida, considerando uma possível margem de erro.<br>

Para mais métodos e mais informações <a href="">veja aqui</a></p>
</div>
<button class="accordion">outros serviços</button>
<div class="panel">
  <h3>Outros Serviços</h3>
  <p>Compramos suas jóias mediante avaliação em nossas lojas.<br>
Entre em contato ou visite uma de nossas lojas para uma avaliação.</p>
</div>


 </div>
</div>
</section>
<?php get_footer();?>