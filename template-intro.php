<?php
/*
	Template Name: Intro
*/

$fields = get_fields();
print_r($fields);
// var_dump( $fields ); 
// if( $fields )
// {
// 	foreach( $fields as $field_name => $value )
// 	{
// 		// get_field_object( $field_name, $post_id, $options )
// 		// - $value has already been loaded for us, no point to load it again in the get_field_object function
// 		$field = get_field_object($field_name, false, array('load_value' => false));

// 		echo '<div>';
// 			echo '<h3>' . $field_name . '</h3>';
// 			echo $value;
// 		echo '</div>';
// 	}
// }

?>


<section class="intro">
	<h1>
		<?php 
			echo $fields["titulo"]
		?>
	</h1>
</section>