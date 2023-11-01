<?php get_header(); ?>

<?php 
  $theme_data = wp_get_theme();
  $theme_name = $theme_data->get('Name'); 
?>

<section class="banners top desktop carrossel">
  <div class="item">

    <?php if(($theme_name == "Para Você") || ($theme_name == "Para Seu Negócio")) { ?>
        <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/2/2023/08/harmonizacao.jpg" alt="">
    <?php } ?>   
  
    <?php if(($theme_name == "Cervejas Para Você") || ($theme_name == "Cervejas Para Seu Negócio")) { ?>       
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/7/2023/10/harmonizacao.png" alt="">        
    <?php } ?>   
    
  </div>
</section>

<section class="banners top mobile carrossel">
    <div class="item">
      <?php if(($theme_name == "Para Você") || ($theme_name == "Para Seu Negócio")) { ?>
        <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/3/2023/07/v3.jpg" alt="">
      <?php } ?>   

      <?php if(($theme_name == "Cervejas Para Você") || ($theme_name == "Cervejas Para Seu Negócio")) { ?>
        <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/7/2023/10/cerveja.jpg" alt="">
      <?php } ?>   
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

      <div class="chamada">
        <p><?php the_field('chamada'); ?></p>
      </div>         
     
    
      <div class="imagem-destaque">
      <?php the_post_thumbnail(); ?>
      <?php
          $featured_posts = get_field('harmoniza_com');
          if( $featured_posts ): ?>
            <ul class="tacas">
                <?php foreach( $featured_posts as $post ):             
                setup_postdata($post); ?>
                <li class="item-<?php echo get_the_ID(); ?>">
                    <?php the_title(); ?>                
                </li>
                <?php endforeach; ?>    
            </ul>
      <?php     
      wp_reset_postdata(); ?>
      <?php endif; ?>
      </div>


      
      <?php the_content(); ?>    
    
    </div>
    

  </div>
</div>


<?php get_footer(); ?>