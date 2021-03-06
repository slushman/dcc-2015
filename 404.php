<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package DCC 2015
 */

get_header();

	?><div id="primary" class="content-area">
		<div class="breadcrumbs">
			<div class="wrap-crumbs"><?php

				do_action( 'dcc_2015_breadcrumbs' );

			?></div><!-- .wrap-crumbs -->
		</div><!-- .breadcrumbs -->
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dcc-2015' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dcc-2015' ); ?></p><?php

					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );

					if ( dcc_2015_categorized_blog() ) : // Only show the widget if site has multiple categories.

					?><div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'dcc-2015' ); ?></h2>
						<ul><?php

							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );

						?></ul>
					</div><!-- .widget --><?php

					endif;

					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'dcc-2015' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );

				?></div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();