<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hacker
 */

?>
			</div>
			<!-- END #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<p class="meta">
					<?php 
						printf( esc_html__( 'Proudly powered by %s', 'hacker' ), 
							'<a href="'. esc_url('https://wordpress.org/') .'" target="_blank">WordPress</a>' 
						);
					?>
					</p>
				</div>
				<!-- END .site-info -->
			</footer>
			<!-- END #colophon -->
		</div>
		<!-- END #primary -->
	</div>
	<!-- END #page -->
	<?php wp_footer(); ?>
</body>
</html>