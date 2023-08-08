<?php get_header(); ?>

<section class="banners top desktop carrossel">
    <div class="item">
    <a href=""><img src="https://megamidiagroup.com.br/adegaassai/para-voce/wp-content/uploads/sites/2/2023/07/banner-blog-2.jpg" alt=""></a>
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
    
    <?php the_content(); ?>

    
    
    </div>




    </div>
</div>


<?php get_footer(); ?>