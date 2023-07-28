<?php
/*
Template Name: Fornecedores
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
    <div class="content">

    <ul class="fornecedores">

      <?php
      $loop = new WP_Query(array(
        'post_type' => 'fornecedor',        
        'posts_per_page' => -1,
        'orderby' => 'rand'
      ));
      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>
      
      <li><?php the_post_thumbnail('thumb-noticia'); ?></li>
   

      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>

    </ul>
    </div>
  </div>
</div>





<?php get_footer(); ?>