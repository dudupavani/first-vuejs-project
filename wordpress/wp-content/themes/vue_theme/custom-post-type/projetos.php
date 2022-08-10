<?php

add_action('init', 'wpshout_register_taxonomy');
function wpshout_register_taxonomy() {
    $args = array( 
    'hierarchical' => true,
    'label' => 'Categorias de projeto',
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'projetos-categoria' ),
    );
    register_taxonomy( 'cat_project_taxonomy', array( 'projetos' ), $args );
}

// TRABALHOS - Post types
function projetos_custom_post_type() {
  register_post_type('projetos', array(
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'portfolio'),
      'taxonomies' => array( 'cat_project_taxonomy' ),
      'supports'          => array( 'title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-images-alt2',
      'hierarchical' => true,
      'show_in_nav_menus' => true,
      
      'labels' => array(
      'name' => 'Projetos',
      'add_new_item' => 'Novo Projeto',
      'edit_item' => 'Editar Job',
      'all_items' => 'Todos os Jobs',
      'singular_name' => 'Projeto',
      'menu_position' => 2
    ),
    
  ));
}
add_action('init', 'projetos_custom_post_type');

?>