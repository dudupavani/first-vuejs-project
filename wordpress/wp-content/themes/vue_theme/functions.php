
<?php

/* API */
require_once($diretorio_do_template . "api/api-post.php");

/* CUSTOM PPOST TYPES */
require_once($diretorio_do_template . "custom-post-type/projetos.php");

add_theme_support('post-thumbnails');

if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'img_thumbnail_blog', 500, 294, array( 'center', 'top'), true  );
}

function wpdocs_custom_excerpt_length( $length ) {
  return 26;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>