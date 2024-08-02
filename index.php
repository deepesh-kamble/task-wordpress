<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css ">
  </head>
  <body>
  <h1 class="blog-title"><?php bloginfo('name')?></h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="content-header">
      <h1 class="title-header" ><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
    </div>
    <?php endwhile; ?>
    <?php
      if ( get_next_posts_link() ) {
        next_posts_link();
      }
    ?>
    <?php endif; ?>
</body>
</html>