<h1><?php bloginfo( 'name' ); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
<?php the_excerpt(); ?>
<?php the_date(); the_time(); ?>
<?php endwhile; else: ?>
<p>Постов нет</p>
<?php endif; ?>