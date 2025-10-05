<?php
/**
 * Feature grid with icons block pattern.
 *
 * @package Jurisic
 */

$pattern_content = sprintf(
    <<<'HTML'
<!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"className":"space-y-10"} -->
<section class="wp-block-group space-y-10" style="padding-top:4rem;padding-bottom:4rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"},"className":"gap-4 text-center"} -->
	<div class="wp-block-group alignwide gap-4 text-center">
		<!-- wp:heading {"textAlign":"center","level":2,"className":"text-4xl font-bold"} -->
		<h2 class="wp-block-heading has-text-align-center text-4xl font-bold">%1$s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"text-neutral/70"} -->
		<p class="has-text-align-center text-neutral/70">%2$s</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"gap-6"} -->
	<div class="wp-block-columns alignwide gap-6">
		<!-- wp:column {"className":"space-y-4 rounded-xl border border-neutral/15 bg-white p-6 shadow-sm"} -->
		<div class="wp-block-column space-y-4 rounded-xl border border-neutral/15 bg-white p-6 shadow-sm">
			<!-- wp:paragraph {"className":"text-2xl"} -->
			<p class="text-2xl">🎯</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"text-xl font-semibold"} -->
			<h3 class="wp-block-heading text-xl font-semibold">%3$s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"text-neutral/70"} -->
			<p class="text-neutral/70">%4$s</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"space-y-4 rounded-xl border border-neutral/15 bg-white p-6 shadow-sm"} -->
		<div class="wp-block-column space-y-4 rounded-xl border border-neutral/15 bg-white p-6 shadow-sm">
			<!-- wp:paragraph {"className":"text-2xl"} -->
			<p class="text-2xl">⚡</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"text-xl font-semibold"} -->
			<h3 class="wp-block-heading text-xl font-semibold">%5$s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"text-neutral/70"} -->
			<p class="text-neutral/70">%6$s</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"space-y-4 rounded-xl border border-neutral/15 bg-white p-6 shadow-sm"} -->
		<div class="wp-block-column space-y-4 rounded-xl border border-neutral/15 bg-white p-6 shadow-sm">
			<!-- wp:paragraph {"className":"text-2xl"} -->
			<p class="text-2xl">🤝</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"text-xl font-semibold"} -->
			<h3 class="wp-block-heading text-xl font-semibold">%7$s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"text-neutral/70"} -->
			<p class="text-neutral/70">%8$s</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
HTML,
    esc_html__( 'Highlights that keep clients happy', 'jurisic' ),
    esc_html__( 'Present value propositions, services, or product features with a responsive layout.', 'jurisic' ),
    esc_html__( 'Precise design system', 'jurisic' ),
    esc_html__( 'Tailored tokens and utilities that scale with your block patterns.', 'jurisic' ),
    esc_html__( 'Fast iteration', 'jurisic' ),
    esc_html__( 'Leverage Tailwind classes and block patterns to build quickly.', 'jurisic' ),
    esc_html__( 'Client friendly', 'jurisic' ),
    esc_html__( 'Maintainable patterns with intuitive naming for content teams.', 'jurisic' )
);

return array(
    'title'         => __( 'Feature grid with icons', 'jurisic' ),
    'categories'    => array( 'jurisic-grids' ),
    'keywords'      => array( __( 'features', 'jurisic' ), __( 'services', 'jurisic' ), __( 'columns', 'jurisic' ) ),
    'description'   => __( 'Three column feature grid with headings and descriptions.', 'jurisic' ),
    'viewportWidth' => 1200,
    'content'       => $pattern_content,
);
