<?php
/*
	Template Name: Intro
*/
?>

<?php
	get_header(); 
?>

<div style="position:absolute; ">
		<?php
			$fields = get_fields();
			print_r($fields);
		?>
</div>
	
<div class="wrapper">

	
	<div class="intro" style="background-image:url(<?php echo $fields['image_bg']; ?>);">
		<div class="intro_container">
			<h1>
				<?php echo $fields['titulo']; ?>
			</h1>
			<p>
				<?php echo $fields['subtitulo']; ?>
			</p>

			<div class="enter">
				<img src="<?php echo get_theme_root_uri(); ?>/Alberca/images/general/enter.png" alt="Entrar">
			</div>
		</div>

		<a href="tel://<?php echo $fields['telefono']; ?>" class="llamar">Llamanos</a>
		<a href="" class="mapa">Mapa</a>
	</div>


</div>



<?php get_footer(); ?>

