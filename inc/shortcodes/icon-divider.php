<?php
function webnus_icon_divider ($atts, $content = null) {
	extract(shortcode_atts(array(
	'name'			=>	'arrow-down-15',
	'border'		=>	'',
	'color'			=>	''

	), $atts));

	$style = 'style="';
	if(!empty($size))  $style .= ' border-color:' . $border. ';';
	if(!empty($color)) $style .= ' color:' . $color. ';';
	
	if(substr($name,0,7) == 'icomoon')
	{
		$name = substr($name,8, strlen($name));
	}
	
	$style .= '"';						
	 $out = '<div class="sec-divider"><div class="cir icomoon-'. $name .'" '.$style.'></div></div>';
	return $out;
}
add_shortcode('icon-divider','webnus_icon_divider');
?>