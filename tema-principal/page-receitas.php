<?php
/*
Template Name: Receitas
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
<?php get_template_part( 'main-menu-mobile' ); ?>   

  <div class="container">
        
    <div class="sidebar">
      <?php get_template_part( 'sidebar' ); ?>     
    </div>
    <div class="content">    
      
        <?php the_content(); ?>

        <div class="lista">            
            <div class="row">
                <?php
                $loop = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'orderby' => 'DESC', 
                'category_name' => 'receitas'
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>

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
</div>


<?php get_footer(); ?>