<?php
/*
Template Name: Homepage Custom
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section class="banners top desktop carrossel">
  <?php
  $images = acf_photo_gallery('banners_desktop', $post->ID);

  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
  <div class="item">
    <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
  </div>
  <?php endforeach;
  endif; ?>
</section>

<section class="banners top mobile carrossel">
  <?php
  $images = acf_photo_gallery('banners_mobile', $post->ID);
  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
  <div class="item">
    <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
  </div>
  <?php endforeach;
  endif; ?>
</section>

<div id="main">
  <div class="container">

  
  <div class="sidebar">  
      <?php get_template_part( 'cadastrese' ); ?>     
    </div>

    <div class="content">    

    <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',          
          'category_name' => 'dicas',
          'posts_per_page' => 1,
          'order' => 'DESC'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

      <div class="card left">
        <div class="col-1 info">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h3><?php the_field('subtitulo'); ?></h3>
          <p><?php the_field('chamada'); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
        </div>
        <div class="col-2 img">
        <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>
        </div>
      </div>

      <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

<?php
        $loop = new WP_Query(array(
          'post_type' => 'post',          
          'category_name' => 'harmonizacao',
          'posts_per_page' => 1,
          'order' => 'DESC'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

      <div class="card right">
        <div class="col-1 info">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h3><?php the_field('subtitulo'); ?></h3>
          <p><?php the_field('chamada'); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
        </div>
        <div class="col-2 img">
        <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>
        </div>
      </div>

      <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      <div class="banner">    
        <a href="https://megamidiagroup.com.br/adegaassai/para-voce/indicacao-do-sommelier/">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/banner.jpg" alt="">     
          </a>       
      </div>

      <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',          
          'category_name' => 'receitas',
          'posts_per_page' => 1,
          'order' => 'DESC'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

      <div class="card left">
        <div class="col-1 info">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h3><?php the_field('subtitulo'); ?></h3>
          <p><?php the_field('chamada'); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
        </div>
        <div class="col-2 img">
        <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>
        </div>
      </div>

      <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>      

    </div>

    
</div>
</div>


<?php get_footer(); ?>