<?php
/**
 * Not found message pattern.
 *
 * @package Jurisic
 */

$pattern_content = <<<'HTML'
<!-- wp:group {"layout":{"type":"constrained"},"className":"space-y-6 text-center"} -->
<div class="wp-block-group space-y-6 text-center">
	<!-- wp:heading {"level":1,"className":"text-6xl font-black"} -->
	<h1 class="wp-block-heading text-6xl font-black">%1$s</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"text-neutral/70"} -->
	<p class="text-neutral/70">%2$s</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"btn"} -->
		<div class="wp-block-button btn"><a class="wp-block-button__link wp-element-button" href="%3$s">%4$s</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
HTML;

$pattern_content = sprintf(
    $pattern_content,
    esc_html__( '404', 'jurisic' ),
    esc_html__( "We couldn't find the page you were looking for.", 'jurisic' ),
    esc_url( home_url( '/' ) ),
    esc_html__( 'Back to home', 'jurisic' )
);

return array(
    'title'       => __( '404 message', 'jurisic' ),
    'categories'  => array( 'jurisic-sections' ),
    'keywords'    => array( __( '404', 'jurisic' ), __( 'error', 'jurisic' ) ),
    'description' => __( 'Friendly not found message with button back to home.', 'jurisic' ),
    'content'     => $pattern_content,
);
