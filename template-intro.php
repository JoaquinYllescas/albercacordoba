<?php
/*
	Template Name: Intro
*/
?>

<?php
	get_header(); 
?>





<div style="position:absolute; color:#ffffff;">
		<!--
		<?php
			$fields = get_fields();
			print_r($fields);
		?>
	-->
</div>
	

<div class="wrapper">

	<div id="black" class="animated "></div>

	
	<section class="intro" style="background-image:url(<?php echo $fields['image_bg']; ?>);">
		<div id="introContainer" class="intro_container animated">
			<h1>
				{{albercaDatos.titulo}}
				<!-- <?php echo $fields['titulo']; ?> -->
			</h1>
			<p>
				{{albercaDatos.subtitulo}}
				<!-- <?php echo $fields['subtitulo']; ?> -->
			</p>

			<div class="enter">
				<img src="<?php echo get_theme_root_uri(); ?>/Alberca/images/general/enter.png" alt="Entrar">
			</div>
		</div>

		<a href="tel://{{albercaDatos.telefono}}" class="llamar">Llamanos</a>
		<a href="" class="mapa">Mapa</a>
	</section>
	


<?php
	if($fields['video_bg']['url']){
		$urlVideo = $fields['video_bg']['url'];
?>
		<div class='video'><video poster='<?php echo get_theme_root_uri(); ?>/Alberca/images/general/enter.png' id='bgvid' playsinline autoplay muted loop><source src='<?php echo($urlVideo); ?>' type='video/mp4'></video></div>
<?php
	}else{
		echo "NOOO";
	}
?>






	


	



	
	<section class="historia">
		
	</section>








	<div class="kino">
		{{albercaDatos}}
	</div>

</div>







<script>
	var datos = <?php echo  json_encode($fields) ?>;
</script>


<?php get_footer(); ?>

