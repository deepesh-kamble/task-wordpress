<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/styles.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class('wide-template blue-bg')?>>
  <header class="site-header">                
    <p class="site-description"><?php bloginfo('description'); ?></p>
  </header>
  <div class="site-content">
    <?php
      if(have_posts()):
        while(have_posts()):
          the_post();
    ?>

    <article <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title('<h1 class="entry-title">','</h1>'); ?>
      </header>

      <div class="entry-content">
        <?php the_content(esc_html__('Continue reading &rarr;','deepesh-theme')); ?>
      </div>
    </article>

    <?php 
      if(comments_open() || get_comments_number()) :
        comments_template();
      endif;
    endwhile;
    ?>

    <?php
      endif;
    ?>
  </div>
  <?php wp_footer(); ?>
</body>
</html>