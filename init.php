<?php
/*
Plugin Name: wpTextResize
Description: Use the [wpResize] shortcode wherever you want the resizing controls to show up.
Version: 1.5
Author: Brad Parbs
Author URI: http://github.com/bradp
*/

class wpTextResize extends WP_Widget
{
  function __construct() {
    parent::__construct(
    // Base ID of your widget
      'wp_tr_widget',

      // Widget name will appear in UI
      __('WordPress Text Resize Widget', 'wp_tr_widget_domain'),

      // Widget description
      array( 'description' => __( 'Simple widget for resizing text', 'wp_tr_widget_domain' ), )
    );
  }

  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];

    ?>

    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title:
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
      </label>
    </p>

    <?php
  }

  function update($new_instance, $old_instance)
  {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
  }

  function widget($args, $instance)
  {
    if (!is_array($instance)) {
      $instance = array();
    }

    extract($args, EXTR_SKIP);

    echo $args['before_widget'];

    $title = apply_filters( 'widget_title', $instance['title'] );

    if (!empty($title)) {
      echo $args['before_title'] . $title . $args['after_title'];
    }

    $this->wpTextResizeControls(0);

    echo $args['after_widget'];
  }

  function wpTextResizeControls($custom){
    if($custom == 1) : ?>
      <div title='Resize Body Text' class='wpTextResizeControls'>
        <a class='increaseFont' title='Increase Font Size'>A</a>
        <a class='resetFont' title='Reset Font Size'>A</a>
        <a class='decreaseFont' title='Decrease Font Size'>A</a></div>
    <?php else: ?>
      <div title='Resize Body Text' class='wpTextResizeControls' style='background-color:lightgray;border-radius:7px;-moz-border-radius:7px;-webkit-border-radius:7px;padding:3px;width:55px;'>
        <a class='increaseFont' title='Increase Font Size' style='font-size:18px;cursor:pointer;'>A</a>
        <a class='resetFont' title='Reset Font Size' style='font-size:13px;padding-left:10px;cursor:pointer;'>A</a>
        <a class='decreaseFont' title='Decrease Font Size' style='font-size:10px;padding-left:10px;cursor:pointer;'>A</a>
      </div>
    <?php endif;
  }
}

function wpTextResize_load_widget() {
  register_widget( 'wpTextResize' );
}
add_action( 'widgets_init', 'wpTextResize_load_widget' );


function wpTextResize()
{
  $plugin_path = plugin_dir_url(__FILE__);

  wp_enqueue_script('text.js', $plugin_path .'/text.js','jquery');
}
add_action('wp_head','wpTextResize',6);

function wpTextResizeBodyClass($classes)
{
  $classes[] = 'wptextresize';

  return $classes;
}
add_filter('body_class','wpTextResizeBodyClass');


function wpTextResizeControlsWidget(){
  $widget = '<div title="Resize Body Text" class="wpTextResizeControls" style="border-radius:7px;-moz-border-radius:7px;-webkit-border-radius:7px;padding:3px;width:55px;">' .
            '<a class="increaseFont" title="Increase Font Size" style="font-size:18px;cursor:pointer;" >A</a>' .
            '<a class="resetFont" title="Reset Font Size" style="font-size:13px;padding-left:10px;cursor:pointer;">A</a>' .
            '<a class="decreaseFont" title="Decrease Font Size" style="font-size:10px;padding-left:10px;cursor:pointer;">A</a>' .
            '</div>';

  return $widget;
}
add_shortcode('wpResize','wpTextResizeControlsWidget');