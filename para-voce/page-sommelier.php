<?php
/*
Template Name: Dica do Sommelier
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

        <div class="lista" id="tintos">            
            <div class="row">
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'indicacao_sommelier',
                'posts_per_page' => -1,
                'orderby' => 'DESC'                
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                	
                <?php $terms = get_the_terms( $post->ID, 'tipo_vinho' ); ?>

                <div class="item<?php foreach( $terms as $term ) echo ' ' . $term->slug; ?>">
                    <div class="tipo">
                        <!--h4><?php the_terms( $post->ID, 'tipo_vinho'); ?></h4-->
                        <h4><?php echo strip_tags(get_the_term_list( $post->ID, 'tipo_vinho', ' ',', ')); ?></h4>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('garrafa'); ?>
                            </a>
                        </div>
                        <div class="col-2">
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>   
                            
                            <ul class="ficha">
                                <li>
                                <strong>País de Origem:</strong> <?php the_field('pais_de_origem'); ?>
                                </li>
                                <li>
                                <strong>Uva:</strong> <?php the_field('uva'); ?>
                                </li>
                                <li>
                                <strong>Teor Alcoólico:</strong> <?php the_field('teor_alcoolico'); ?>
                                </li>
                                <li>
                                <strong>Vinícola:</strong> <?php the_field('vinicola'); ?>
                                </li>
                            </ul>

                            <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
                            
                        </div>
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