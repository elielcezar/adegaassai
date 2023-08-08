<?php get_header(); ?>

<section class="banners top desktop carrossel">
  <div class="item">
    <?php if (in_category('dicas')) : ?>
      <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/subhome-dicas.jpg" alt="">
    <?php elseif (in_category('tipos-de-vinhos')) : ?>
      <img src="https://megamidiagroup.com.br/adegaassai/para-voce/wp-content/uploads/sites/2/2023/08/banner-tipos-de-vinhos.png" alt="">
    <?php elseif (in_category('receitas')) : ?>
      <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/sub-home-receitas.jpg" alt="">
    <?php endif; ?>
  </div>
</section>

  <section class="banners top mobile carrossel">
    <div class="item">
    <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/v3.jpg" alt="">
  </div>
  </section>

<div id="main">
<?php get_template_part( 'main-menu-mobile' ); ?>     

  <div class="container">
  <div class="sidebar">
      <?php get_template_part( 'cadastrese' ); ?>     
    </div>

    
    <div class="content">  

      <h2><?php the_title(); ?></h2>

      <div class="chamada">
        <p><?php the_field('chamada'); ?></p>
      </div>
      
      <?php the_content(); ?>    
    
    </div>
    

  </div>
</div>


<?php get_footer(); ?>