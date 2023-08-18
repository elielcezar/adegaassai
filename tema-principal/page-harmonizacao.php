<?php
/*
Template Name: Harmonizacoes
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
      <?php get_template_part( 'cadastrese' ); ?>     
    </div>
    <div class="content">  

    <?php the_content(); ?>    
      
    <?php
        $loop = new WP_Query(array(
          'post_type' => 'harmonizacao',
          'posts_per_page' => 10,
          'orderby' => 'title',
            'order' => 'ASC'         
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
      <div class="item">
        <div class="col-1">          
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-noticia'); ?></a>
        </div>
        <div class="col-2">
          <h3>       
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <p class="chamada"><?php the_field('chamada'); ?></p>
          <div class="harmoniza-com">
            <ul>
              <?php
              $featured_posts = get_field('harmoniza_com');
              if( $featured_posts ): ?>              
                  <?php foreach( $featured_posts as $post ):                     
                      setup_postdata($post); ?>
                      <li>                      
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </li>       
                  <?php endforeach; ?>                
                  <?php wp_reset_postdata(); ?>              
              <?php endif; ?>
            </ul>
          </div>                      
        </div>
      </div>
      <?php endwhile;                
          endif;                            
        ?>

    </div>
    

    </div>
</div>


<?php get_footer(); ?>