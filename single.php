
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
</head>
<body>
  <div class="container">
    <h1 class="content-title"><?php the_title(); ?></h1>
    <div class="content">
      <?php the_content(); ?>
    </div>
    
</div>
</body>
</html>