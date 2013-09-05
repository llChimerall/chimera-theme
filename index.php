<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="PSPad editor, www.pspad.com" />
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <?php wp_head(); ?>
  </head>
  <body>
  <h1><?php bloginfo( 'name' ); ?></h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
  <?php the_excerpt(); ?>
  <?php the_date(); the_time(); ?>
  <?php endwhile; else: ?>
  <p>Постов нет</p>
  <?php endif; ?>
  <h2>Категории</h2>
  <ul>
    <?php wp_list_categories(array(
      'title_li'           => '',
      'show_count'         => 1
    )); ?>
    
  </ul>
  <h2>Страницы</h2>
  <ul>
    <?php wp_list_pages(array(
      'title_li'           => '',
    )); ?>
  </ul>
  
  <h2>Меню</h2>
  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'container'       => '' ) ); ?>
  
  <?php wp_footer(); ?>
  </body>
</html>