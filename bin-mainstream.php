<?php
/*
Plugin Name: Before It's News&reg;: Mainstream Stories
Plugin URI: http://www.beforeitsnews.com/widgets
Description: Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won't bog down your page-load time.
Version: 0.2
Author: Before It's News&reg;
Author URI: http://beforeitsnews.com
*/

/* Add the widget using widgets_init */
add_action( 'widgets_init', 'bin_load_mainstream_widgets' );

/* Register the widget */
function bin_load_mainstream_widgets() {
	register_widget( 'Mainstream_Widget' );
} /* End registration of the widget */

/* mainstream_Widget class */
class Mainstream_Widget extends WP_Widget {

	/* Widget setup */
	function mainstream_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'mainstream', 'description' => __( 'Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won\'t bog down your page-load time.', 'mainstream' ) );
		
		/* Create the widget */
		$this->WP_Widget( 'mainstream-widget', __( 'Before It\'s News&reg;: Mainstream Stories', 'mainstream' ), $widget_ops );

	} /* End Widget Setup */
	
	/* Display the widget once activated */
	function widget( $args ) {
		extract( $args );
		
		/* Before widget */
		echo $before_widget;
		
		/* During widget */
		echo '<a class="b4in-widget" href="http://beforeitsnews.com/widget/mainstream">Before It\'s News | People Powered News</a><script type="text/javascript" src="http://beforeitsnews.com/widgets/js/widget.js"></script>';
		
		/* After widget */
		echo $after_widget;
		
	}/* Stop Displaying the Widget */

} /* End Mainstream_Widget Class */

?>