<?php
function webnus_parallax($attributes, $content) {

	extract(shortcode_atts(array(
		"img" => '',
		"height" => '',
		'padding_top' => 0,
		'padding_bottom' => 0,
		'bg_attachment' => 'false',
		'bgcover' => 'true',
		'repeat' => 'no-repeat',
		'dark' => 'false',
		'speed'=>'6',
		'class' => '',
		'row_pattern'=>'',
		'row_color'=>'',
		'row_opacity'=>'1.0',
		'id'=>''
		),
	 $attributes));
	 
	  	if(is_numeric($img)){
		
		$img = wp_get_attachment_url( $img );
		
	}

	if ($bg_attachment == 'true')
		$fixed = 'fixed center top' . (('true' == $bgcover) ? '/ cover' : '');
	else
		$fixed = 'center';

	$background_style = !empty($img) ? " background: url('{$img}') {$repeat} {$fixed}; " : '';

	$height_style = " min-height:{$height}px ";

	$padding_style = " padding-top:{$padding_top}; padding-bottom:{$padding_bottom}; ";

	$is_dark = ('true' == $dark) ? ' dark ' : '';
	$color_overlay = 'opacity:'.$row_opacity.';background-color:' . $row_color;
	if(!empty($id))
		$out = '</div></section><section id="'.$id.'"  class="parallax-sec '.$is_dark.' blox ' . $class .' '.$row_pattern . '" style="' . $padding_style . $background_style . $height_style . '" data-speed="'.$speed. '" data-type="background"><div class="max-overlay" style="'.  $color_overlay .'"></div><div class="wpb_row vc_row-fluid "><div class="container">';
	else
		$out = '</div></section><section  class="parallax-sec '.$is_dark.' blox ' . $class .' '.$row_pattern . '" style="' . $padding_style . $background_style . $height_style . '" data-speed="'.$speed. '" data-type="background"><div class="max-overlay" style="'.  $color_overlay .'"></div><div class="wpb_row vc_row-fluid "><div class="container">';
	$out .= do_shortcode($content);
	$out .= '</div></div></section><section class="container"><div class="row-wrapper-x">';

	return $out;
}

add_shortcode('parallax', 'webnus_parallax');
?>