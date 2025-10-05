<?php
/**
 * Blog heading block pattern.
 *
 * @package Jurisic
 */

return array(
    'title'       => __( 'Blog heading', 'jurisic' ),
    'categories'  => array( 'jurisic-sections' ),
    'keywords'    => array( __( 'blog', 'jurisic' ) ),
    'description' => __( 'Page heading for blog and index templates.', 'jurisic' ),
    'content'     => sprintf(
        '<!-- wp:heading {"textAlign":"left","level":1} -->
        <h1 class="wp-block-heading has-text-align-left">%s</h1>
        <!-- /wp:heading -->',
        esc_html__( 'Blog', 'jurisic' )
    ),
);
