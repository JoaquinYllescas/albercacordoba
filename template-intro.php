<?php
/*
	Template Name: Intro
*/
?>

<?php
	get_header(); 
?>





<div style="position:absolute; color:#ffffff;">
	
		<?php
			$fields = get_fields();
			// print_r($fields);
			//echo get_theme_root_uri();
		?> 

</div>

<!-- <div class="back" style="background-image:url({{albercaDatos.image_bg}});"></div> -->

<div class="wrapper">

	<div id="black" class="animated "></div>

	
	<!-- VIEWS -->
	<ng-view></ng-view>
	<!-- END VIEWS -->
















</div>







<script>
	var datos = <?php echo  json_encode($fields) ?>;
	console.log(datos);
</script>


<?php get_footer(); ?>

