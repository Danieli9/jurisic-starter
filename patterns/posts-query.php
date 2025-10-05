<?php
/**
 * Latest posts query block pattern.
 *
 * @package Jurisic
 */

$pattern_content = <<<'HTML'
<!-- wp:group {"align":"wide","layout":{"type":"constrained"},"className":"space-y-12"} -->
<div class="wp-block-group alignwide space-y-12">
	<!-- wp:heading {"level":2,"className":"text-4xl font-bold"} -->
	<h2 class="wp-block-heading text-4xl font-bold">%1$s</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"grid","columns":3},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"grid gap-8 md:grid-cols-3"} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"className":"space-y-3"} -->
		<div class="wp-block-group space-y-3">
			<!-- wp:post-featured-image {"isLink":true,"className":"rounded-lg"} /-->

			<!-- wp:post-title {"isLink":true,"className":"text-2xl font-semibold hover:text-accent"} /-->

			<!-- wp:post-excerpt {"showMoreOnNewLine":false,"className":"text-neutral/80"} /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"typography":{"fontSize":"0.875rem"}},"className":"text-neutral/60"} -->
			<div class="wp-block-group text-neutral/60">
				<!-- wp:post-date /-->
				<!-- wp:post-terms {"term":"category"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"},"className":"items-center pt-8"} -->
		<!-- wp:query-pagination-previous {"label":"%2$s"} /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next {"label":"%3$s"} /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","className":"text-neutral/60"} -->
		<p class="has-text-align-center text-neutral/60">%4$s</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
HTML;

$pattern_content = sprintf(
    $pattern_content,
    esc_html__( 'Latest articles', 'jurisic' ),
    esc_html__( '← Newer posts', 'jurisic' ),
    esc_html__( 'Older posts →', 'jurisic' ),
    esc_html__( 'No posts have been published yet.', 'jurisic' )
);

return array(
    'title'         => __( 'Latest posts grid', 'jurisic' ),
    'categories'    => array( 'jurisic-grids' ),
    'keywords'      => array( __( 'posts', 'jurisic' ), __( 'grid', 'jurisic' ), __( 'blog', 'jurisic' ) ),
    'description'   => __( 'Display recent posts in a responsive grid with pagination.', 'jurisic' ),
    'viewportWidth' => 1280,
    'content'       => $pattern_content,
);
