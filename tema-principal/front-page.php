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

<div id="main-wrapper">

  <!--div id="newsletter-mobile">
    <h3>Newsletter</h3>
    <p>Receba as novidades</p>
    <?php //echo do_shortcode('[mc4wp_form id=105]'); ?>
  </div-->

  <section id="adega">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'category_name' => 'adega'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <div class="card">
          <div class="info">
            <h2>Adega</h2>
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('chamada'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
          </div>
          <div class="img">
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

      <div id="sidebarWrap">
        <div id="sidebar">

          <!--div class="newsletter">
            <h3>Newsletter</h3>
            <p>Receba as novidades</p>
            <?php //echo do_shortcode('[mc4wp_form id=105]'); ?>
          </div-->

          <div class="revista">
            <h3>Revista Imperatriz Estações</h3>
            <p>EDIÇÃO DE INVERNO</p>
            <?php
                $loop = new WP_Query(array(
                  'post_type' => 'revistas',
                  'posts_per_page' => 1,        
                  'order' => 'DESC'       

                ));
                if ($loop->have_posts()) :
                  while ($loop->have_posts()) : $loop->the_post(); ?>

                <?php
                    $image = get_field('capa');
                    $size = 'revistas'; // (thumbnail, medium, large, full or custom size)            
                  ?>
                
               
                  <a href="<?php the_field('url'); ?>">
                    <?php 
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                  </a>
                  
                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section id="receitas">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'receita',
          'posts_per_page' => 1,
          'orderby' => 'rand'
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <div class="card">
          <div class="info">
            <h2>Receitas</h2>
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('chamada'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
          </div>
          <div class="img">
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
      <div class="sidebar"></div>
    </div>
  </section>

  <section id="drinks">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'category_name' => 'drinks'
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <h2>Drinks</h2>
        <h3><?php the_title(); ?></h3>
        <p><?php the_field('chamada'); ?></p>
        <div class="lista-drinks">
        <?php
         $images = acf_photo_gallery('imagens_home', $post->ID);
         if (count($images)) :
           foreach ($images as $image) :
             $full_image_url = $image['full_image_url'];
             $full_image_url = acf_photo_gallery_resize_image($full_image_url, 353, 234); 
             $url = $image['url'];
         ?>
          <div class="item">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
          </div>
          <?php endforeach;
          endif; ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      </div>
      <div class="sidebar"></div>
    </div>
  </section>

  <!--section id="video">
  <div class="container">
    <div class="content">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/video-1.jpg" alt="">
    </div>
    <div class="sidebar"></div>
  </div>
</section-->

  <section id="destinos">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'category_name' => 'destinos',
          'order' => 'DESC'
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <h2>Destinos</h2>
        <h3><?php the_title(); ?></h3>
        <p><?php the_field('chamada'); ?></p>
        <div class="lista-destinos">

        <?php
         $images = acf_photo_gallery('imagens_home', $post->ID);
         if (count($images)) :
           foreach ($images as $image) :
             $full_image_url = $image['full_image_url'];
             $full_image_url = acf_photo_gallery_resize_image($full_image_url, 353, 234); 
             $url = $image['url'];
         ?>
          <div class="item">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
          </div>
          <?php endforeach;
          endif; ?>
         
        </div>
        <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>


      </div>
      <div class="sidebar"></div>
    </div>
  </section>

  <section id="mais">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 1,     
          'category_name' => 'publieditorial',
          'order' => 'DESC'     
          /*'meta_query' => array(
            array(
                'key'   => 'publieditorial',
                'value' => '1',
            )
        )*/
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <div id="editorial" class="card">
          <div class="info">
            <h2>Publieditorial</h2>
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('chamada'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
          </div>
          <div class="img">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('thumb-noticia'); ?>
            </a>

          </div>
        </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>


        <div id="casa" class="card">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => 'a-casa-e-sua',
            'order' => 'DESC'
          ));
          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

          <div class="card">
            <div class="info">
              <h2>A casa é sua</h2>
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('chamada'); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
            </div>
            <div class="img">
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
      <div class="sidebar"></div>
    </div>
  </section>

  <section id="cozinha">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'category_name' => 'cozinha-afetiva',
          'order' => 'DESC'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <div class="card">
          <div class="info">
            <h2>Cozinha afetiva</h2>
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('chamada'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
          </div>
          <div class="img">
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
  </section>

  <!--section id="especiais">
    
    <div class="container">
      <div class="content">
        <div class="card">
          <div class="info">
            <h2>Especiais</h2>
            <h3>Lorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.  </p>
            <a href="" class="btn">saiba Mais</a>
          </div>
          <div class="img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/vinho-2.jpg" alt="">
          </div> 
        </div> 
      </div>

      <div class="sidebar"></div>
    </div>
  
</section-->

</div><!-- main wrapper -->

<?php get_footer(); ?>