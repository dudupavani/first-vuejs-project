<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vue & Wordpress</title>
    <?php wp_head(); ?>
</head>
<body>

    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <div>
        <?php the_title(); ?>
    </div>
    <?php endwhile; else : endif; ?>
<?php get_footer(); ?>
</body>
</html>