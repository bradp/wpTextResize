<?php
/*
Plugin Name: wpTextResize
Description: Use the [wpResize] shortcode wherever you want the resizing controls to show up.
Version: 1.2
Author: Brad Parbs
Author URI: http://github.com/bradp
*/


function wpTextResize(){
wp_enqueue_script(
  "text.js", WP_PLUGIN_URL."/wpTextResize/text.js");
}

add_action('wp_head','wpTextResize',6);

function wpTextResizeControlsWidget(){
	?>
	<div title='Resize Body Text' class="wpTextResizeControls" style='background-color:lightgray;border-radius:7px;-moz-border-radius:7px;-webkit-border-radius:7px;float:right;clear:right;padding:3px;'>
		<a class='increaseFont' title='Increase Font Size' style='font-size:18px;'>A</a><a class='resetFont' title='Reset Font Size' style='font-size:13px;padding-left:10px;'>A</a><a class='decreaseFont' title='Decrease Font Size' style='font-size:10px;padding-left:10px;'>A</a>
	<?php
}

function wpTextResizeControls($custom){
if($custom == 1 ){
	?>
	<div title='Resize Body Text' class="wpTextResizeControls">
	<a class='increaseFont' title='Increase Font Size'>A</a><a class='resetFont' title='Reset Font Size'>A</a><a class='decreaseFont' title='Decrease Font Size'>A</a>
	<?php
}

else{
	?>
	<div title='Resize Body Text' class="wpTextResizeControls" style='background-color:lightgray;border-radius:7px;-moz-border-radius:7px;-webkit-border-radius:7px;float:right;clear:right;padding:3px;'>
		<a class='increaseFont' title='Increase Font Size' style='font-size:18px;'>A</a><a class='resetFont' title='Reset Font Size' style='font-size:13px;padding-left:10px;'>A</a><a class='decreaseFont' title='Decrease Font Size' style='font-size:10px;padding-left:10px;'>A</a>
	</div>	
	<?
	}
}

add_shortcode('wpResize','wpTextResizeControlsWidget')