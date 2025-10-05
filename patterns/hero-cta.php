<?php
/**
 * Hero with CTA block pattern.
 *
 * @package Jurisic
 */

$pattern_content = sprintf(
    <<<'HTML'
<!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"backgroundColor":"base","className":"shadow-lg"} -->
<section class="wp-block-group shadow-lg has-base-background-color" style="padding-top:5rem;padding-bottom:5rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"className":"gap-6 text-center"} -->
	<div class="wp-block-group alignwide gap-6 text-center">
		<!-- wp:paragraph {"className":"uppercase tracking-[0.35em] text-accent text-sm"} -->
		<p class="uppercase tracking-[0.35em] text-accent text-sm">%1$s</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"className":"text-5xl font-extrabold tracking-tight"} -->
		<h1 class="wp-block-heading has-text-align-center text-5xl font-extrabold tracking-tight">%2$s</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"text-lg text-neutral/80"} -->
		<p class="has-text-align-center text-lg text-neutral/80">%3$s</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"className":"gap-4"} -->
		<div class="wp-block-buttons gap-4">
			<!-- wp:button {"className":"btn"} -->
			<div class="wp-block-button btn"><a class="wp-block-button__link wp-element-button">%4$s</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">%5$s</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
HTML,
    esc_html__( 'Custom block theme starter', 'jurisic' ),
    esc_html__( 'Design with freedom. Launch with confidence.', 'jurisic' ),
    esc_html__( 'Tailwind-powered patterns, global styles, and modern templates ready for your next project.', 'jurisic' ),
    esc_html__( 'Start now', 'jurisic' ),
    esc_html__( 'View components', 'jurisic' )
);

return array(
    'title'         => __( 'Hero with CTA', 'jurisic' ),
    'categories'    => array( 'jurisic-sections' ),
    'keywords'      => array( __( 'hero', 'jurisic' ), __( 'call to action', 'jurisic' ) ),
    'description'   => __( 'Hero section with headline, description, and primary/secondary buttons.', 'jurisic' ),
    'viewportWidth' => 1280,
    'content'       => $pattern_content,
);
