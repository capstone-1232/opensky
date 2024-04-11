<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package open-sky-mental-health
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info container">
		<h2>Open Sky Mental Health</h2>
		<p>leanne@openskymentalhealth.com</p>
		<p>780-433-5598</p>
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'open-sky-mental-health')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('@%s Open Sky Mental Health', 'open-sky-mental-health'), '2024');
			?>
		</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>