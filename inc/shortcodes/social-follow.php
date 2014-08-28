<?php

function webnus_socialfollow($attributes, $content = null)
{
	
	extract(shortcode_atts(array(
		"twitter" => '',
		"facebook" =>'',
		"youtube" =>'',
		"instagram" => '',
		"google" =>'',
		"dribbble" =>'',
		"pinterest" =>'',
		"vimeo" =>'',
		"linkedin" =>'',
		"rss" =>'',
		"flickr" =>'',
		"reddit" =>'',
		"lastfm" =>'',
		"delicious" =>'',
		"tumblr" =>'',
		"skype" =>'',
		"picassa" =>'',
		
	), $attributes));
ob_start();
	
	echo '<div class="row social-media">';

	if(!empty($facebook)) echo '<a class="facebook" href="'.$facebook.'"><i class="icomoon-facebook"></i><span>Facebook</span></a>';
	if(!empty($twitter)) echo '<a class="twitter" href="'.$twitter.'"><i class="icomoon-twitter"></i><span>twitter</span></a>';
	if(!empty($youtube)) echo '<a class="youtube" href="'.$youtube.'"><i class="icomoon-youtube"></i><span>youtube</span></a>';
	if(!empty($google)) echo '<a class="google" href="'.$google.'"><i class="icomoon-google"></i><span>Google</span></a>';
	if(!empty($dribbble)) echo '<a class="dribble" href="'.$dribbble.'"><i class="icomoon-dribbble"></i><span>Dribbble</span></a>';
	if(!empty($pinterest)) echo '<a class="pinterest" href="'.$pinterest.'"><i class="icomoon-pinterest"></i><span>Pinterest</span></a>';
	if(!empty($vimeo)) echo '<a class="vimeo" href="'.$vimeo.'"><i class="icomoon-vimeo Three-Dee"></i><span>vimeo</span></a>';
	if(!empty($instagram)) echo '<a class="instagram" href="'.$instagram.'"><i class="icomoon-instagram"></i><span>Instagram</span></a>';
	if(!empty($linkedin)) echo '<a class="other-social" href="'.$linkedin.'"><i class="icomoon-linkedin"></i><span>LinkedIn</span></a>';
	if(!empty($rss)) echo '<a class="other-social" href="'.$rss.'"><i class="icomoon-feed-3"></i><span>RSS</span></a>';
	if(!empty($flickr)) echo '<a class="other-social" href="'.$flickr.'"><i class="icomoon-flickr"></i><span>Flickr</span></a>';
	if(!empty($reddit)) echo '<a class="other-social" href="'.$reddit.'"><i class="icomoon-reddit"></i><span>Reddit</span></a>';
	if(!empty($lastfm)) echo '<a class="other-social" href="'.$lastfm.'"><i class="icomoon-lastfm"></i><span>Lastfm</span></a>';
	if(!empty($delicious)) echo '<a class="other-social" href="'.$delicious.'"><i class="icomoon-delicious"></i><span>Delicious</span></a>';
	if(!empty($tumblr)) echo '<a class="other-social" href="'.$tumblr.'"><i class="icomoon-tumblr"></i><span>Tumblr</span></a>';
	if(!empty($skype)) echo '<a class="other-social" href="'.$skype.'"><i class="icomoon-skype"></i><span>Skype</span></a>';
	if(!empty($picassa)) echo '<a class="other-social" href="'.$picassa.'"><i class="icomoon-picassa"></i><span>Picassa</span></a>';
	echo '</div>';
	
	$out = ob_get_contents();
	ob_end_clean();
	return $out;	
	
}


add_shortcode('socialfollow','webnus_socialfollow');
?>