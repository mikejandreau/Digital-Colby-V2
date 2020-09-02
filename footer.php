<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Colby_V2
 */

?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 copyright copy-left">
					&copy; Copyright <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
				</div>
				<div class="col-md-6 copyright copy-right">
					Design <span class="hide-tablet">&amp; Development</span> by <a href="http://losaidos.com/" target="_blank">Losaidos Design</a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page .site -->

<a class="scrollup js-scroll-trigger" id="scrollUpButton" href="#page-top"><svg class="scrollup-chevron" xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg><span class="sr-only">to top</span></a>

<?php wp_footer(); ?>

</body>
</html>
