<?php get_header(); ?>

<section class="banners top desktop">
  <div class="item">   
    <?php if (function_exists('z_taxonomy_image')){ 
      z_taxonomy_image(); 
      }?> 
  </div>
</section>

<!--section class="banners top desktop carrossel">
    <div class="item">
      <?php if ( is_singular( array( 'harmonizacao') ) ) { ?>
        <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/08/harmonizacao.jpg" alt="">
      <?php } else { ?>
        <img src="https://megamidiagroup.com.br/adegaassai/para-voce/wp-content/uploads/sites/2/2023/07/home-para-vocE-2.png" alt="">
      <?php } ?>
  </div>
  </section-->

  <section class="banners top mobile carrossel">
    <div class="item">
    <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/v3.jpg" alt="">
  </div>
  </section>

<div id="main">
<?php get_template_part( 'main-menu-mobile' ); ?>     

  <div class="container">

  <div class="sidebar">
      <?php get_template_part( 'sidebar' ); ?>     
    </div>
    
    <div class="content">  

    <h2><?php the_title(); ?></h2>

    <?php 
      $chamada = get_field('chamada');
      if($chamada) { ?>
        <div class="chamada">
          <p><?php the_field('chamada'); ?></p>
        </div>
      <?php } ?>
    
    <?php the_content(); ?>

    
    
    </div>




    </div>
</div>


<?php get_footer(); ?>