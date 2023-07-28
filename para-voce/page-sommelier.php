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
  <div class="container">
    <div class="content">  
      
        <div class="semana">
        
            <div class="title">
                <h3>Seleção da semana</h3>
                <a href="#tintos" class="anchor btn">Veja mais</a>
            </div>

            <div class="wrapper">
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'indicacao_sommelier',
                'posts_per_page' => 3,
                'orderby' => 'DESC'          
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="item">
                <div class="col-1">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('garrafa'); ?>
                </a>
                </div>
                <div class="col-2">
                <h3>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h3>          
                <p><a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a></p>
                </div>
            </div>
            <?php endwhile;                
                endif;                            
                ?>
            </div>

        </div>

        <div class="posts">
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'post',          
                'category_name' => 'harmonizacao',
                'posts_per_page' => 3,
                'order' => 'RAND'                
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="item">                
                <div class="img">                    
                    <?php the_post_thumbnail('quadrado'); ?>                    
                </div>
                <a href="<?php the_permalink(); ?>" class="gradient-background"></a>
                <div class="content-post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h3><?php the_field('subtitulo'); ?></h3>                                
                </div>                
            </div>

            <?php endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>

        <div class="lista" id="tintos">
            <h3>Vinhos Tintos</h3>
            <div class="row">
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'indicacao_sommelier',
                'posts_per_page' => 4,
                'orderby' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'tipo_vinho',
                        'field' => 'slug',
                        'terms' => array('tinto', 'branco', 'rose', 'espumante') //excluding the term you dont want.
                    )
                )
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="item">
                    <div class="col-1">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('garrafa'); ?>
                    </a>
                    </div>
                    <div class="col-2">
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                    </h3>          
                    <p><a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a></p>
                    </div>
                </div>
            <?php endwhile;                
                endif;                            
                ?>
            </div>
        </div>

        

    </div>
    
    <div class="sidebar">
      <?php get_template_part( 'cadastrese' ); ?>     
    </div>

</div>
</div>


<?php get_footer(); ?>