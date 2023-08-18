<?php get_header(); ?>

<section class="banners top desktop carrossel">
    <div class="item">
    <a href=""><img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/08/selecao-assai.jpg" alt=""></a>
  </div>
  </section>

  <section class="banners top mobile carrossel">
    <div class="item">
    <img src="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/wp-content/uploads/sites/3/2023/07/v3.jpg" alt="">
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

    <div class="ficha">
      <div class="row">
        <div class="col-1">
          <img src="<?php the_field('foto_garrafa'); ?>" />
        </div>
        <div class="col-2">
          <ul>
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
        </div>
      </div>
    </div>
    
    <?php the_content(); ?>

    
    
    </div>

   

</div>
</div>


<?php get_footer(); ?>