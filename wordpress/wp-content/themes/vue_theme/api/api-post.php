<?php

function meu_api_post() {

    $posts = array();
    $args =  array('post_type'=> 'post', 'post_per_page' => -1);
    $loop = new WP_Query($args);

    while($loop->have_posts()) : $loop->the_post();

        $id = get_the_ID();
        $titulo = get_the_title();
        $slug = get_post_field('post_name', $id);
        $link = get_permalink();
        $excerpt = get_the_excerpt($id);
        $image_thumb = get_the_post_thumbnail_url( $id, "img_thumbnail_blog" );
        $category = get_the_category($id);

        $post = array(
            'id' => $id,
            'titulo' => $titulo,
            'slug' => $slug,
            'link' => $link,
            'excerpt' => $excerpt,
            'image_thumb' => $image_thumb,
            'category' => $category
        );

        $posts[$id] = $post;
    endwhile;

    return rest_ensure_response( $posts );
}


function registrar_meu_api_post() {
    register_rest_route('api_post/v1/', '/post', array(
        array(
            'methods' => 'GET',
            'callback' => 'meu_api_post',
        ),
    ));
}

add_action('rest_api_init', 'registrar_meu_api_post');


?>