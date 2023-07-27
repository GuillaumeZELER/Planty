<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <!-- Import css -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
                <!-- Titre du site -->
                <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                     <!-- ajout de ma nouvelle widget area -->
                     <a href="<?php echo(get_home_url()); ?>">
                        <?php if ( is_active_sidebar( 'logo' ) ) : ?>
                        <div id="logo" class="logo-header-widget widget-area" role="complementary">
                        <?php dynamic_sidebar( 'logo' ); ?>
                        </div>
                        <?php endif; ?>
                    </a>
                    <!-- fin nouvelle widget area -->
                </div>

                <!-- Slogan du site -->
                <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
                <div class="rectangle-contacter">
                </div>
            </div>

            <!-- Menu -->
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php 
                    wp_nav_menu(   
                        array ( 
                            'theme_location' => 'principal' 
                        ) 
                    ); 
                ?>
                <div class="rectangle-commander">
                        <a class="commander" href="<?php echo(get_home_url()); ?>/precommander/">Commander</a>
                </div>
            </nav>


        </header>
        <div id="container">
            <main id="content" role="main">



