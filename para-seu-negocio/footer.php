
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_assai.png" alt="">                    
                </div>
                <div class="col-2">
                <p>A plataforma Adega Assaí é uma iniciativa do Assaí Atacadista.</p>
                </div>
                <div class="col-3">
                    <ul class="select">
                        <li><a href="https://megamidiagroup.com.br/adegaassai/vinhos-para-voce">Para você</a></li>
                        <li><a href="https://megamidiagroup.com.br/adegaassai/vinhos-para-seu-negocio/" class="active">Para seu negócio</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>                                                
                        <li><a href="<?php echo site_url(); ?>/vitrine-do-fornecedor/">Vitrine do <strong>Fornecedor</strong></a></li>
                    </ul>
                </div>
                <div class="col-5">
                    <a href="<?php echo site_url(); ?>/cadastre-se" class="btn">Cadastre-se</a>
                </div>
            </div>
       
    </div>
</footer>

<div class="footer-1">
    <div class="conteiner">
        <p>BEBA COM MODERAÇÃO. A VENDA E O CONSUMO DE BEBIDA ALCOÓLICA SÃO PROIBIDOS PARA MENORES.</p>
    </div>
</div>
<div class="footer-2">                
    <div class="container">
        <p>Powered by: <a href="https://www.megamidia.com.br/" target="_blank">MegaMidia Group</a></p>          
        <p>Copyright 2023. Todos os direitos reservados.</p>      
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>