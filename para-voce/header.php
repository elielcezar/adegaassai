<!doctype html>
<html>

<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0REVKNLH9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q0REVKNLH9');
</script>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <a class="menuBtn header">
    <span class="lines"></span>
  </a>

  <div class="menu-mobile">
    <nav class="mainMenu">
      <ul class="menu">
        <li>
          <a href="https://megamidiagroup.com.br/adegaassai/vinhos-para-voce" id="para-voce">Para <strong>Você</strong></a>
        </li>
        <li>
          <a href="https://megamidiagroup.com.br/adegaassai/vinhos-para-seu-negocio/" id="para-negocio">Para <strong>seu negócio</strong></a>
        </li>
      </ul>
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      <ul class="menu">
        <li class="selecao"><a href="<?php echo site_url(); ?>/indicacao-do-sommelier/">Indicação do <strong>Sommelier</strong></a></li>
        <li class="vitrine"><a href="<?php echo site_url(); ?>/vitrine-do-fornecedor/">Vitrine do <strong>Fornecedor</strong></a></li>
        <li class="cadastrese"><a href="<?php echo site_url(); ?>/cadastre-se/" class="btn">Cadastre-se</a></li>
      </ul>
    </nav>
  </div>

  <header>
    <div class="container">

        <nav class="left">
            <ul class="select">
              <li><a href="https://megamidiagroup.com.br/adegaassai/vinhos-para-voce" class="active para-voce">Home <strong>Para Você</strong></a></li>
              <li><a href="https://megamidiagroup.com.br/adegaassai/vinhos-para-seu-negocio/" class="para-negocio">Home <strong>Para Seu Negócio</strong></a></li>
            </ul>
            
        </nav>       
      
        <h1 class="title"><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>

        <nav class="right">
            <ul>              
              <li><a href="<?php echo site_url(); ?>/vitrine-do-fornecedor/">Vitrine do <strong>Fornecedor</strong></a></li>
              <li><a href="<?php echo site_url(); ?>/cadastre-se" class="btn">Cadastre-se</a></li>
            </ul>            
        </nav>     
        
          
    </div>
  </header>