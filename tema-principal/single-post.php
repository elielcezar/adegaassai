<?php get_header(); ?>

<?php 
  $theme_data = wp_get_theme();
  $theme_name = $theme_data->get('Name'); 
?>

<section class="banners top desktop carrossel">
  <div class="item">

    <?php if(($theme_name == "Para Você") || ($theme_name == "Para Seu Negócio")) { ?>
        <?php if (in_category('blog-da-adega')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/3/2023/08/blog-da-adega.png" alt="">
        <?php elseif (in_category('tipos-de-vinhos')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/3/2023/08/tipos-de-vinhos.jpg" alt="">
        <?php elseif (in_category('receitas')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/3/2023/08/receitas.jpg" alt="">
        <?php endif; ?>
    <?php } ?>   
    
    <?php if(($theme_name == "Destilados Para Você") || ($theme_name == "Destilados Para Seu Negócio")) { ?>
        <?php if (in_category('blog-da-adega')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/4/2023/09/blog-da-adega.png" alt="">
        <?php elseif (in_category('tipos-de-destilados')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/4/2023/09/tipos-de-destilados.jpg" alt="">
        <?php elseif (in_category('drinks')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/4/2023/09/drinks.png" alt="">
        <?php endif; ?>
    <?php } ?>   

    <?php if(($theme_name == "Cervejas Para Você") || ($theme_name == "Cervejas Para Seu Negócio")) { ?>
        <?php if (in_category('blog-da-adega')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/7/2023/09/blog-da-adega.jpg" alt="">
        <?php elseif (in_category('tipos-de-cervejas')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/7/2023/09/tipos-de-cervejas.jpg" alt="">
        <?php elseif (in_category('receitas')) : ?>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/7/2023/10/receitas.png" alt="">
        <?php endif; ?>
    <?php } ?>   
    
    
  </div>
</section>

<section class="banners top mobile carrossel">
    <div class="item">
      <?php if(($theme_name == "Para Você") || ($theme_name == "Para Seu Negócio")) { ?>
        <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/3/2023/07/v3.jpg" alt="">
      <?php } ?>   

      <?php if(($theme_name == "Destilados Para Você") || ($theme_name == "Destilados Para Seu Negócio")) { ?>
        <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/5/2023/10/destilados.jpg" alt="">
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