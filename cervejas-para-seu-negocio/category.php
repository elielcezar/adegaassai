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
    <img src="https://megamidiagroup.com.br/adegaassai/para-voce/wp-content/uploads/sites/2/2023/07/banner-blog-2.jpg" alt="">
  </div>
  </section-->

  <section class="banners top mobile">
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
      <div class="wrapper">
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="item">
            <div class="col-1">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumb-noticia'); ?>
              </a>
            </div>
            <div class="col-2">
              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
              <p><?php the_field('chamada'); ?></p>
              <p><a href="<?php the_permalink(); ?>" class="btn">Leia mais</a></p>
            </div>
          </div>
      <?php endwhile;
      endif;
      ?>
      </div>


    </div>
    
 

    </div>

</div>


<?php get_footer(); ?>