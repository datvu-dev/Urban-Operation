<?php
ob_start();
echo '/* dynamic generated css*/'. "\n";


$o  = new webnus_options();


/*
 *
*Top  Menu Hover Color
*/

?>
<?php 

/*
 * Google Font For P,H Tags
*/
$thm_options = get_option('webnus_options');


if(isset($thm_options['webnus_p_font']) && $thm_options['webnus_p_font']!='')
{
	echo "p { font-family: {$thm_options['webnus_p_font']}}\n";
}
if(isset($thm_options['webnus_heading_font']) && $thm_options['webnus_heading_font']!='')
{
	echo "h1, h2, h3, h4, h5, h6 { font-family: {$thm_options['webnus_heading_font']}}\n";
}

if(isset($thm_options['webnus_body_font']) && $thm_options['webnus_body_font']!='')
{
	echo "body { font-family: {$thm_options['webnus_body_font']}}\n";
}



/* topnav font size */

$webnus_body_font_size = $webnus_options->webnus_body_font_size(); 
if( !empty($webnus_body_font_size) )
{
	
	echo "body { font-size:{$webnus_body_font_size};}\n";
	
}


$webnus_body_line_height = $webnus_options->webnus_body_line_height(); 
if( !empty($webnus_body_line_height) )
{
	
	echo "body { line-height:{$webnus_body_line_height}; }\n";
	
}
$webnus_body_font_wieght = $webnus_options->webnus_body_font_wieght(); 
if( !empty($webnus_body_font_wieght) )
{
	
	echo "body { font-weight:{$webnus_body_font_wieght}; }\n";
	
}
$webnus_body_font_color = $webnus_options->webnus_body_font_color(); 
if( !empty($webnus_body_font_color) )
{
	
	echo "body { color:{$webnus_body_font_color}; }\n";
	
}
$webnus_topnav_font_size = $webnus_options->webnus_topnav_font_size(); 
if( !empty($webnus_topnav_font_size) )
{
	
	echo "ul#nav * { font-size:{$webnus_topnav_font_size}; }\n";
	
}
$webnus_topnav_letter_spacing = $webnus_options->webnus_topnav_letter_spacing(); 
if( !empty($webnus_topnav_letter_spacing) )
{
	
	echo "ul#nav * { letter-spacing:{$webnus_topnav_letter_spacing}; }\n";
	
}
$webnus_topnav_line_height = $webnus_options->webnus_topnav_line_height(); 
if( !empty($webnus_topnav_line_height) )
{
	
	echo "ul#nav * { line-height:{$webnus_topnav_line_height}; }\n";
	
}
$webnus_topnav_font_wieght = $webnus_options->webnus_topnav_font_wieght(); 
if( !empty($webnus_topnav_font_wieght) )
{
	
	echo "ul#nav * { font-weight:{$webnus_topnav_font_wieght}; }\n";
	
}
$webnus_topnav_font_color = $webnus_options->webnus_topnav_font_color(); 
if( !empty($webnus_topnav_font_color) )
{
	
	echo "ul#nav * { color:{$webnus_topnav_font_color}; }\n";
	
}
$webnus_h1_font_size = $webnus_options->webnus_h1_font_size(); 
if( !empty($webnus_h1_font_size) )
{
	
	echo "h1 { font-size:{$webnus_h1_font_size}; }\n";
	
}
$webnus_h1_letter_spacing = $webnus_options->webnus_h1_letter_spacing(); 
if( !empty($webnus_h1_letter_spacing) )
{
	
	echo "h1 { letter-spacing:{$webnus_h1_letter_spacing}; }\n";
	
}
$webnus_h1_line_height = $webnus_options->webnus_h1_line_height(); 
if( !empty($webnus_h1_line_height) )
{
	
	echo "h1 { line-height:{$webnus_h1_line_height}; }\n";
	
}
$webnus_h1_font_wieght = $webnus_options->webnus_h1_font_wieght(); 
if( !empty($webnus_h1_font_wieght) )
{
	
	echo "h1 { font-weight:{$webnus_h1_font_wieght}; }\n";
	
}
$webnus_h1_font_color = $webnus_options->webnus_h1_font_color(); 
if( !empty($webnus_h1_font_color) )
{
	
	echo "h1 { color:{$webnus_h1_font_color}; }\n";
	
}
$webnus_h1_font_color = $webnus_options->webnus_h1_font_color(); 
if( !empty($webnus_h1_font_color) )
{
	
	echo "h1 { color:{$webnus_h1_font_color}; }\n";
	
}


/*  H2 */

$webnus_h2_font_size = $webnus_options->webnus_h2_font_size(); 
if( !empty($webnus_h2_font_size) )
{
	
	echo "h2 { font-size:{$webnus_h2_font_size}; }\n";
	
}
$webnus_h2_letter_spacing = $webnus_options->webnus_h2_letter_spacing(); 
if( !empty($webnus_h2_letter_spacing) )
{
	
	echo "h2 { letter-spacing:{$webnus_h2_letter_spacing}; }\n";
	
}
$webnus_h2_line_height = $webnus_options->webnus_h2_line_height(); 
if( !empty($webnus_h2_line_height) )
{
	
	echo "h2 { line-height:{$webnus_h2_line_height}; }\n";
	
}
$webnus_h2_font_wieght = $webnus_options->webnus_h2_font_wieght(); 
if( !empty($webnus_h2_font_wieght) )
{
	
	echo "h2 { font-weight:{$webnus_h2_font_wieght}; }\n";
	
}
$webnus_h2_font_color = $webnus_options->webnus_h2_font_color(); 
if( !empty($webnus_h2_font_color) )
{
	
	echo "h2 { color:{$webnus_h2_font_color}; }\n";
	
}
$webnus_h2_font_color = $webnus_options->webnus_h2_font_color(); 
if( !empty($webnus_h2_font_color) )
{
	
	echo "h2 { color:{$webnus_h2_font_color}; }\n";
	
}

/*  H3 */

$webnus_h3_font_size = $webnus_options->webnus_h3_font_size(); 
if( !empty($webnus_h3_font_size) )
{
	
	echo "h3 { font-size:{$webnus_h3_font_size}; }\n";
	
}
$webnus_h3_letter_spacing = $webnus_options->webnus_h3_letter_spacing(); 
if( !empty($webnus_h3_letter_spacing) )
{
	
	echo "h3 { letter-spacing:{$webnus_h3_letter_spacing}; }\n";
	
}
$webnus_h3_line_height = $webnus_options->webnus_h3_line_height(); 
if( !empty($webnus_h3_line_height) )
{
	
	echo "h3 { line-height:{$webnus_h3_line_height}; }\n";
	
}
$webnus_h3_font_wieght = $webnus_options->webnus_h3_font_wieght(); 
if( !empty($webnus_h3_font_wieght) )
{
	
	echo "h3 { font-weight:{$webnus_h3_font_wieght}; }\n";
	
}
$webnus_h3_font_color = $webnus_options->webnus_h3_font_color(); 
if( !empty($webnus_h3_font_color) )
{
	
	echo "h3 { color:{$webnus_h3_font_color}; }\n";
	
}
$webnus_h3_font_color = $webnus_options->webnus_h3_font_color(); 
if( !empty($webnus_h3_font_color) )
{
	
	echo "h3 { color:{$webnus_h3_font_color}; }\n";
	
}


/*  H4 */

$webnus_h4_font_size = $webnus_options->webnus_h4_font_size(); 
if( !empty($webnus_h4_font_size) )
{
	
	echo "h4 { font-size:{$webnus_h4_font_size}; }\n";
	
}
$webnus_h4_letter_spacing = $webnus_options->webnus_h4_letter_spacing(); 
if( !empty($webnus_h4_letter_spacing) )
{
	
	echo "h4 { letter-spacing:{$webnus_h4_letter_spacing}; }\n";
	
}
$webnus_h4_line_height = $webnus_options->webnus_h4_line_height(); 
if( !empty($webnus_h4_line_height) )
{
	
	echo "h4 { line-height:{$webnus_h4_line_height}; }\n";
	
}
$webnus_h4_font_wieght = $webnus_options->webnus_h4_font_wieght(); 
if( !empty($webnus_h4_font_wieght) )
{
	
	echo "h4 { font-weight:{$webnus_h4_font_wieght}; }\n";
	
}
$webnus_h4_font_color = $webnus_options->webnus_h4_font_color(); 
if( !empty($webnus_h4_font_color) )
{
	
	echo "h4 { color:{$webnus_h4_font_color}; }\n";
	
}
$webnus_h4_font_color = $webnus_options->webnus_h4_font_color(); 
if( !empty($webnus_h4_font_color) )
{
	
	echo "h4 { color:{$webnus_h4_font_color}; }\n";
	
}


/*  H5 */

$webnus_h5_font_size = $webnus_options->webnus_h5_font_size(); 
if( !empty($webnus_h5_font_size) )
{
	
	echo "h5 { font-size:{$webnus_h5_font_size}; }\n";
	
}
$webnus_h5_letter_spacing = $webnus_options->webnus_h5_letter_spacing(); 
if( !empty($webnus_h5_letter_spacing) )
{
	
	echo "h5 { letter-spacing:{$webnus_h5_letter_spacing}; }\n";
	
}
$webnus_h5_line_height = $webnus_options->webnus_h5_line_height(); 
if( !empty($webnus_h5_line_height) )
{
	
	echo "h5 { line-height:{$webnus_h5_line_height}; }\n";
	
}
$webnus_h5_font_wieght = $webnus_options->webnus_h5_font_wieght(); 
if( !empty($webnus_h5_font_wieght) )
{
	
	echo "h5 { font-weight:{$webnus_h5_font_wieght}; }\n";
	
}
$webnus_h5_font_color = $webnus_options->webnus_h5_font_color(); 
if( !empty($webnus_h5_font_color) )
{
	
	echo "h5 { color:{$webnus_h5_font_color}; }\n";
	
}
$webnus_h5_font_color = $webnus_options->webnus_h5_font_color(); 
if( !empty($webnus_h5_font_color) )
{
	
	echo "h5 { color:{$webnus_h5_font_color}; }\n";
	
}


/*  H6 */

$webnus_h6_font_size = $webnus_options->webnus_h6_font_size(); 
if( !empty($webnus_h6_font_size) )
{
	
	echo "h6 { font-size:{$webnus_h6_font_size}; }\n";
	
}
$webnus_h6_letter_spacing = $webnus_options->webnus_h6_letter_spacing(); 
if( !empty($webnus_h6_letter_spacing) )
{
	
	echo "h6 { letter-spacing:{$webnus_h6_letter_spacing}; }\n";
	
}
$webnus_h6_line_height = $webnus_options->webnus_h6_line_height(); 
if( !empty($webnus_h6_line_height) )
{
	
	echo "h6 { line-height:{$webnus_h6_line_height}; }\n";
	
}
$webnus_h6_font_wieght = $webnus_options->webnus_h6_font_wieght(); 
if( !empty($webnus_h6_font_wieght) )
{
	
	echo "h6 { font-weight:{$webnus_h6_font_wieght}; }\n";
	
}
$webnus_h6_font_color = $webnus_options->webnus_h6_font_color(); 
if( !empty($webnus_h6_font_color) )
{
	
	echo "h6 { color:{$webnus_h6_font_color}; }\n";
	
}
$webnus_h6_font_color = $webnus_options->webnus_h6_font_color(); 
if( !empty($webnus_h6_font_color) )
{
	
	echo "h6 { color:{$webnus_h6_font_color}; }\n";
	
}











/*
 * Color Skin Style Generator
 */

 /* == Menu Colors ------------------ */
if(isset($thm_options['webnus_menu_link_color']) && $thm_options['webnus_menu_link_color']!='')
{
	echo "#wrap #nav a:hover, #wrap  #nav li:hover > a, #wrap #nav li.current > a, #wrap #nav li.current ul li a:hover, #wrap #nav li.active > a { color:{$thm_options['webnus_menu_link_color']};}\n\n";
}



if(isset($thm_options['webnus_resoponsive_menu_icon_color']) && $thm_options['webnus_resoponsive_menu_icon_color']!='')
{
	echo "#wrap #header.sm-rgt-mn #menu-icon:hover i, #wrap #header.sm-rgt-mn #menu-icon.active i {color:{$thm_options['webnus_resoponsive_menu_icon_color']};}\n\n";
}








/* == Icon Box Colors---------------------- */


if(isset($thm_options['webnus_iconbox_base_color']) && $thm_options['webnus_iconbox_base_color']!='')
{
	echo "#wrap .icon-box  i, #wrap  .icon-box1  i, #wrap .icon-box2 i, #wrap  .icon-box3  i, #wrap  .icon-box4 i, #wrap  .icon-box5 i , #wrap  .icon-box7  i { color:{$thm_options['webnus_iconbox_base_color']};}\n\n";
}

if(isset($thm_options['webnus_iconbox6_icon_background_color']) && $thm_options['webnus_iconbox6_icon_background_color']!='')
{
	echo "#wrap .icon-box6  i {background-color:{$thm_options['webnus_iconbox6_icon_background_color']};}\n\n";
}


if(isset($thm_options['webnus_iconbox0_icon_hover_color']) && $thm_options['webnus_iconbox0_icon_hover_color']!='')
{
	echo "#wrap .icon-box:hover  i { color:{$thm_options['webnus_iconbox0_icon_hover_color']};}\n\n";
}


if(isset($thm_options['webnus_iconbox3_icon_hover_color']) && $thm_options['webnus_iconbox3_icon_hover_color']!='')
{
	echo "#wrap  .icon-box3:hover i { color:{$thm_options['webnus_iconbox3_icon_hover_color']};}\n\n";
}

if(isset($thm_options['webnus_iconbox1_hover_background_color']) && $thm_options['webnus_iconbox1_hover_background_color']!='')
{
	echo "#wrap .icon-box1:hover  i {background-color:{$thm_options['webnus_iconbox1_hover_background_color']};}\n\n";
}

if(isset($thm_options['webnus_iconbox4_hover_background_color']) && $thm_options['webnus_iconbox4_hover_background_color']!='')
{
	echo "#wrap  .icon-box4:hover i {background-color:{$thm_options['webnus_iconbox4_hover_background_color']};}\n\n";
}

if(isset($thm_options['webnus_iconbox5_hover_background_color']) && $thm_options['webnus_iconbox5_hover_background_color']!='')
{
	echo "#wrap  .icon-box5:hover i {background-color:{$thm_options['webnus_iconbox5_hover_background_color']};}\n\n";
}

if(isset($thm_options['webnus_iconbox6_hover_background_color']) && $thm_options['webnus_iconbox6_hover_background_color']!='')
{
	echo "#wrap  .icon-box6:hover i  {background-color:{$thm_options['webnus_iconbox6_hover_background_color']};}\n\n";
}


if(isset($thm_options['webnus_iconbox7_button_background_color']) && $thm_options['webnus_iconbox7_button_background_color']!='')
{
	echo "#wrap .icon-box7 a.magicmore {background:{$thm_options['webnus_iconbox7_button_background_color']};}\n\n";
}
















/* == Portfolio Colors---------------------- */


/* portfolio filter links color + border color */
if(isset($thm_options['webnus_portfolio_filter_links_color']) && $thm_options['webnus_portfolio_filter_links_color']!='')
{
	echo "#wrap nav.primary .portfolioFilters a { color:{$thm_options['webnus_portfolio_filter_links_color']};}\n";
}
if(isset($thm_options['webnus_portfolio_filter_links_border_color']) && $thm_options['webnus_portfolio_filter_links_border_color']!='')
{
	echo "#wrap nav.primary .portfolioFilters a { border-color:{$thm_options['webnus_portfolio_filter_links_border_color']};}\n";
}
/* portfolio filter links hover color + border color */

if(isset($thm_options['webnus_portfolio_filter_links_hover_color']) && $thm_options['webnus_portfolio_filter_links_hover_color']!='')
{
	echo "#wrap nav.primary .portfolioFilters a:hover {  color:{$thm_options['webnus_portfolio_filter_links_hover_color']};}\n";
}
if(isset($thm_options['webnus_portfolio_filter_links_hover_border_color']) && $thm_options['webnus_portfolio_filter_links_hover_border_color']!='')
{
	echo "#wrap nav.primary .portfolioFilters a:hover {  border-color:{$thm_options['webnus_portfolio_filter_links_hover_border_color']};}\n";
}

/* portfolio filter links color selected + border color */
if(isset($thm_options['webnus_portfolio_filter_selected_links_color']) && $thm_options['webnus_portfolio_filter_selected_links_color']!='')
{
	echo "#wrap nav.primary .portfolioFilters a.selected, #wrap nav.primary ul li a:active {  color:{$thm_options['webnus_portfolio_filter_selected_links_color']}; }\n";
}

if(isset($thm_options['webnus_portfolio_filter_selected_links_border_color']) && $thm_options['webnus_portfolio_filter_selected_links_border_color']!='')
{
	echo "#wrap nav.primary .portfolioFilters a.selected, #wrap nav.primary ul li a:active {  border-color:{$thm_options['webnus_portfolio_filter_selected_links_border_color']}; }\n";
}



/* portfolio item zoom link color */

if(isset($thm_options['webnus_portfolio_item_zoom_link_color']) && $thm_options['webnus_portfolio_item_zoom_link_color']!='')
{
	echo ".zoomex2 a { color:{$thm_options['webnus_portfolio_item_zoom_link_color']};}\n";
}
/* portfolio item zoom link border color */
if(isset($thm_options['webnus_portfolio_item_zoom_link_border_color']) && $thm_options['webnus_portfolio_item_zoom_link_border_color']!='')
{
	echo ".zoomex2 a i { border-color:{$thm_options['webnus_portfolio_item_zoom_link_border_color']};}\n";
}


/* portfolio item zoom link hover color + border color */
if(isset($thm_options['webnus_portfolio_item_zoom_link_hover_color']) && $thm_options['webnus_portfolio_item_zoom_link_hover_color']!='')
{
	echo "#wrap .zoomex2 a:hover i { color:{$thm_options['webnus_portfolio_item_zoom_link_hover_color']};  }\n";
}
if(isset($thm_options['webnus_portfolio_item_zoom_link_hover_border_color']) && $thm_options['webnus_portfolio_item_zoom_link_hover_border_color']!='')
{
	echo "#wrap .zoomex2 a:hover i { border-color:{$thm_options['webnus_portfolio_item_zoom_link_hover_border_color']};  }\n";
}






/* counter box */

if(isset($thm_options['webnus_counterbox_hover_background_color']) && $thm_options['webnus_counterbox_hover_background_color']!='')
{
	echo "#wrap .max-counter.m-counter:hover .max-count, #wrap  .blox.dark .max-counter.m-counter:hover .max-count, #wrap  .dark-content .max-counter.m-counter:hover .max-count{background-color:{$thm_options['webnus_counterbox_hover_background_color']};}\n";
}

if(isset($thm_options['webnus_counterbox_hover_border_color']) && $thm_options['webnus_counterbox_hover_border_color']!='')
{
	echo "#wrap .max-counter.m-counter:hover .max-count, #wrap  .blox.dark .max-counter.m-counter:hover .max-count, #wrap  .dark-content .max-counter.m-counter:hover .max-count{border-color:{$thm_options['webnus_counterbox_hover_border_color']};}\n";
}




/* contact form */

if(isset($thm_options['webnus_contactform_button_color']) && $thm_options['webnus_contactform_button_color']!='')
{
	echo "#wrap .contact-form .btnSend {background-color:{$thm_options['webnus_contactform_button_color']};}\n";
}

if(isset($thm_options['webnus_contactform_button_hover_color']) && $thm_options['webnus_contactform_button_hover_color']!='')
{
	echo "#wrap .contact-form .btnSend:hover {background-color:{$thm_options['webnus_contactform_button_hover_color']};}\n";
}




/* == Learn more link Colors----------------------------- */

/* learn more link color */

if(isset($thm_options['webnus_learnmore_link_color']) && $thm_options['webnus_learnmore_link_color']!='')
{
	echo "#wrap a.magicmore { color:{$thm_options['webnus_learnmore_link_color']};}\n";
}
/* learn more hover link color */

if(isset($thm_options['webnus_learnmore_hover_link_color']) && $thm_options['webnus_learnmore_hover_link_color']!='')
{
	echo "#wrap a.magicmore:hover { color:{$thm_options['webnus_learnmore_hover_link_color']};}\n";
}




/* scroll to top */

if(isset($thm_options['webnus_scroll_to_top_hover_background_color']) && $thm_options['webnus_scroll_to_top_hover_background_color']!='')
{
	echo "#wrap #scroll-top a:hover {background-color:{$thm_options['webnus_scroll_to_top_hover_background_color']};}\n";
}






/* == Our Process Icon Colors------------------------------ */

/* our process icon color + border color += background color */
if(isset($thm_options['webnus_ourprocess_icon_color']) && $thm_options['webnus_ourprocess_icon_color']!='')
{
	echo "#wrap .our-process-item i { color:{$thm_options['webnus_ourprocess_icon_color']};}\n";
}

if(isset($thm_options['webnus_ourprocess_border_color']) && $thm_options['webnus_ourprocess_border_color']!='')
{
	echo "#wrap .our-process-item i { border-color:{$thm_options['webnus_ourprocess_border_color']};}\n";
}

if(isset($thm_options['webnus_ourprocess_background_color']) && $thm_options['webnus_ourprocess_background_color']!='')
{
	echo "#wrap .our-process-item i { background-color:{$thm_options['webnus_ourprocess_background_color']};} \n";
}

/* our process icon hover color + border color += background color */

if(isset($thm_options['webnus_ourprocess_hover_icon_color']) && $thm_options['webnus_ourprocess_hover_icon_color']!='')
{
	echo "#wrap .our-process-item:hover i { color:{$thm_options['webnus_ourprocess_hover_icon_color']};  } \n";
}
if(isset($thm_options['webnus_ourprocess_hover_border_color']) && $thm_options['webnus_ourprocess_hover_border_color']!='')
{
	echo "#wrap .our-process-item:hover i { border-color:{$thm_options['webnus_ourprocess_hover_border_color']};  } \n";
}
if(isset($thm_options['webnus_ourprocess_hover_background_color']) && $thm_options['webnus_ourprocess_hover_background_color']!='')
{
	echo "#wrap .our-process-item:hover i { background-color:{$thm_options['webnus_ourprocess_hover_background_color']};  } \n";
}




/* == Subtitle3 Border Bottom Color------------------------------------ */
/* subtitle3 border bottom color */

if(isset($thm_options['webnus_subtitle3_border_bottom_color']) && $thm_options['webnus_subtitle3_border_bottom_color']!='')
{
	echo "#wrap h6.h-sub-content { border-bottom-color:{$thm_options['webnus_subtitle3_border_bottom_color']};}\n";
}












/* == Flex Slider Next & Previous Button Hover Background Color---------------------------------------------------------------- */

/* flex slider next & previous button hover background color */


if(isset($thm_options['webnus_flexslider_next_previous_button_hover_background_color']) && $thm_options['webnus_flexslider_next_previous_button_hover_background_color']!='')
{
	echo "#wrap .flexslider:hover .flex-next:hover, #wrap  .flexslider:hover .flex-prev:hover { background-color:{$thm_options['webnus_flexslider_next_previous_button_hover_background_color']};}\n";
}










/*
 * Blog Loop And Single Blog Styles
 * 
 */
/* All Posts Title Font-family */
$webnus_blog_title_font_family = $webnus_options->webnus_blog_title_font_family(); 
if( !empty($webnus_blog_title_font_family) )
{
	echo ".blog-post h4, .blog-post h1, .blog-post h3, .blog-line h4, .blog-single-post h1 { font-family:$webnus_blog_title_font_family;}\n";
}

/* Blog Loop Title font-size */
$webnus_blog_loop_title_font_size = $webnus_options->webnus_blog_loop_title_font_size(); 
if( !empty($webnus_blog_loop_title_font_size) )
{
	echo ".blog-post h3 { font-size:{$webnus_blog_loop_title_font_size};}\n";
}

/* Blog Loop Title line-height */
$webnus_blog_loop_title_line_height = $webnus_options->webnus_blog_loop_title_line_height(); 
if( !empty($webnus_blog_loop_title_line_height) )
{
	echo ".blog-post h3 { line-height:{$webnus_blog_loop_title_line_height};}\n";
}

/* Blog Loop Title font-wight */
$webnus_blog_loop_title_font_weight = $webnus_options->webnus_blog_loop_title_font_weight(); 
if( !empty($webnus_blog_loop_title_font_weight) )
{
	echo ".blog-post h3 { font-weight:{$webnus_blog_loop_title_font_weight};}\n";
}

/* Blog Loop Title letter-spacing */
$webnus_blog_loop_title_letter_spacing = $webnus_options->webnus_blog_loop_title_letter_spacing(); 
if( !empty($webnus_blog_loop_title_letter_spacing) )
{
	echo ".blog-post h3 { letter-spacing:{$webnus_blog_loop_title_letter_spacing};}\n";
}

/* Blog Loop Title color */
$webnus_blog_loop_title_color = $webnus_options->webnus_blog_loop_title_color(); 
if( !empty($webnus_blog_loop_title_color) )
{
	echo ".blog-post h3, .blog-post h3 a { color:$webnus_blog_loop_title_color;}\n";
}


/* Blog Loop Title hover color */
$webnus_blog_loop_title_hover_color = $webnus_options->webnus_blog_loop_title_hover_color(); 
if( !empty($webnus_blog_loop_title_hover_color) )
{
	echo ".blog-post h3 a:hover { color:$webnus_blog_loop_title_hover_color;}\n";
}

/***** Blog Single Title Font Options *****/

/* Single post Title font-size */

$webnus_blog_single_post_title_font_size = $webnus_options->webnus_blog_single_post_title_font_size(); 
if( !empty($webnus_blog_single_post_title_font_size) )
{
	echo ".blog-single-post h1 { font-size:{$webnus_blog_single_post_title_font_size};}\n";
}


/* Single post Title line-height */

$webnus_blog_single_title_line_height = $webnus_options->webnus_blog_single_title_line_height(); 
if( !empty($webnus_blog_single_title_line_height) )
{
	echo ".blog-single-post h1 { line-height:{$webnus_blog_single_title_line_height};}\n";
}


/* Single post Title font-wight */

$webnus_blog_single_title_font_weight = $webnus_options->webnus_blog_single_title_font_weight(); 
if( !empty($webnus_blog_single_title_font_weight) )
{
	echo ".blog-single-post h1 { font-weight:{$webnus_blog_single_title_font_weight};}\n";
}

/* Single post Title letter-spacing */

$webnus_blog_single_title_letter_spacing = $webnus_options->webnus_blog_single_title_letter_spacing(); 
if( !empty($webnus_blog_single_title_letter_spacing) )
{
	echo ".blog-single-post h1 { letter-spacing:{$webnus_blog_single_title_letter_spacing};}\n";
}


/* Single post Title color */

$webnus_blog_single_title_color = $webnus_options->webnus_blog_single_title_color(); 
if( !empty($webnus_blog_single_title_color) )
{
	echo ".blog-single-post h1 { color:$webnus_blog_single_title_color;}\n";
}


/* Topbar background color */

$topbar_background = $webnus_options->webnus_topbar_background_color();

if(!empty($topbar_background))
	echo ".top-bar { background-color:$topbar_background; }\n";


/* footer background color */
$footer_background = $webnus_options->webnus_footer_background_color();

if(!empty($footer_background))
	echo "#footer { background-color:$footer_background; }\n";


$footer_bottom_background = $webnus_options->webnus_footer_bottom_background_color();

if(!empty($footer_bottom_background))
	echo ".footbot { background-color:$footer_bottom_background; }\n";



















$out = ob_get_contents();

file_put_contents(get_template_directory(). '/css/dyncss.css', $out);

ob_end_clean();



?>