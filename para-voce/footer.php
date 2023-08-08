<div class="carrossel-fornecedores">
    <div class="container">
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

<footer>
    <div class="container">
       
            <div class="row">
                <div class="col-1">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-adega.png" alt="">
                </div>
                <div class="col-2">
                    <p>A plataforma Adega Assaí é uma iniciativa do Assaí Atacadista.</p>
                </div>
                <div class="col-3">
                    <ul class="select">
                        <li><a href="https://megamidiagroup.com.br/adegaassai/para-voce" class="active">Para você</a></li>
                        <li><a href="https://megamidiagroup.com.br/adegaassai/para-seu-negocio/">Para seu negócio</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>                        
                        <li><a href="<?php echo site_url(); ?>/indicacao-do-sommelier/">Indicação do <strong>Sommelier</strong></a></li>
                        <li><a href="<?php echo site_url(); ?>/vitrine-do-fornecedor/">Vitrine do <strong>Fornecedor</strong></a></li>
                    </ul>
                </div>
                <div class="col-5">
                    <a href="<?php echo site_url(); ?>/cadastre-se" class="btn">Cadastre-se</a>
                </div>
            </div>
    </div>
</footer>
<div class="footer-2">                
    <p>Powered by: <a href="https://www.megamidia.com.br/" target="_blank">MegaMidia Group</a></p>                
</div>

<?php wp_footer(); ?>

</body>

</html>