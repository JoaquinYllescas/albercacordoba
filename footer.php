<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

<script src="<?php echo get_theme_root_uri(); ?>/Alberca/js/jquery-3.1.1.min.js"></script>

<script src="<?php echo get_theme_root_uri(); ?>/Alberca/js/angular/angular.min.js"></script>

<script src="<?php echo get_theme_root_uri(); ?>/Alberca/js/angular/angular-route.min.js"></script>

<script>
	// var datos = <?php echo  json_encode($fields) ?>;
</script>




 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDCMDTjmkcW_rPCpMKxBK6zJlyVqE7s80&callback=initMap"
    async defer></script>

    
<script src="<?php echo get_theme_root_uri(); ?>/Alberca/js/javascript.js"></script>



</body>
</html>
