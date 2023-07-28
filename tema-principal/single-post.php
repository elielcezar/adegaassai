<?php get_header(); ?>

<section class="banners top desktop carrossel">
  <div class="item">
    <?php if (in_category('dicas')) : ?>
      <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/subhome-dicas.jpg" alt="">
    <?php elseif (in_category('harmonizacao')) : ?>
      <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/subhome-harmonizacao2.jpg" alt="">
    <?php elseif (in_category('receitas')) : ?>
      <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/sub-home-receitas.jpg" alt="">
    <?php endif; ?>
  </div>
</section>

  <section class="banners top mobile carrossel">
    <div class="item">
    <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/v3.jpg" alt="">
  </div>
  </section>

<div id="main">
  <div class="container">
    <div class="content">  

    <h2><?php the_title(); ?></h2>

    <div class="chamada">
      <p><?php the_field('chamada'); ?></p>
    </div>
    
    <?php the_content(); ?>

    <div class="fornecedores">
        <h2>Vitrine do Fornecedor</h2>
        <div class="carrossel">
        <?php
            $loop = new WP_Query(array(
              'post_type' => 'fornecedor',        
              'posts_per_page' => -1,
              'orderby' => 'rand'
            ));
            if ($loop->have_posts()) :
              while ($loop->have_posts()) : $loop->the_post(); ?>
            
            <div class="item"><?php the_post_thumbnail('thumb-noticia'); ?></div>        

            <?php endwhile;
            endif;
            wp_reset_postdata();
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