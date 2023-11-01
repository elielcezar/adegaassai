<?php get_header(); ?>

<section class="banners top desktop carrossel">
    <div class="item">
    <a href=""><img src="<?php echo site_url(); ?>/wp-content/uploads/sites/4/2023/09/monte-sua-adega.png" alt=""></a>
  </div>
  </section>

  <section class="banners top mobile carrossel">
    <div class="item">
    <img src="<?php echo site_url(); ?>/wp-content/uploads/sites/5/2023/10/destilados.jpg" alt="">
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

    <div class="ficha">
      <div class="row">
        <div class="col-1">
        <?php the_post_thumbnail(''); ?>
        </div>
        <div class="col-2">
          <ul>
            <li>
              <?php $terms = get_the_terms( $post->ID, 'tipo_destilado' ); ?>
              <strong>Tipo de Destilado:</strong> <?php echo strip_tags(get_the_term_list( $post->ID, 'tipo_destilado', ' ',', ')); ?>
            </li>            
            <li>
              <strong>Teor Alcoólico:</strong> <?php the_field('teor_alcoolico'); ?>
            </li>
            <li>
              <strong>Produtor:</strong> <?php the_field('produtor'); ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <?php the_content(); ?>

    
    
    </div>

    
</div>
</div>


<?php get_footer(); ?>