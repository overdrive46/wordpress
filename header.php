<html>
    <head>
        <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" media="all" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <div class="centered_header">
                <div id="header-image">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
       <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" width="350" height="60" />
    </a>
</div>
                
                <div class="feed" onclick="window.location='#'"></div>
                <div class="twitter" onclick="window.location='#'"></div>
                <div class="facebook" onclick="window.location='#'"></div>
            </div>  
        </div>
        <div class="menu">
            <div class="centered_menu">
                <ul>
                    <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                    <?php wp_list_categories('title_li='); ?> 
                    <?php wp_list_pages('title_li='); ?>
                </ul>
            </div>
        </div>
    </body>
    
</html>