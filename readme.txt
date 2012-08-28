=== wpTextResize ===
Contributors: bradparbs
Donate link: http://bradparbs.com/
Tags: text, resize, resizer, text resizing, increase font size
Stable Tag: trunk
Requires at least: 3.2
Tested up to: 3.3.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

wpTextResize is an easy to use way to have Increase, Decrease, reset font size controls for body text on a WordPress site.

== Description ==
wpTextResize is an easy to use way to have Increase, Decrease, reset font size controls for body text on a WordPress site.

Just use the [wpResize] shortcode wherever you want the controls to show up. Or use the widget to place it in a sidebar.

Theme creators: You can also add wpTextResizeControls(0) to your template for the controls to be automatically styled, or wpTextResizeControls(1) to manually style. When manually styling, wpTextResizeControls is the container, and increaseFont, resetFont, and decreaseFont are all anchors you can target.

Go wild!

== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the [wpResize] shortcode wherever you want the controls to appear.
4. You can also use the widget to place it in a sidebar.
5. OR Add wpTextResizeControls(0) to your template for the controls to be automatically styled, or wpTextResizeControls(1) to manually style. When manually styling, wpTextResizeControls is the container, and increaseFont, resetFont, and decreaseFont are all anchors you can target.

== Changelog ==

= 1.5 =

* Added a widget
* When hover over one of the controls, the cursor changes to a hand
* Bug fixes

= 1.4 = 

* Fixed issues with shortcode output
* Better coding with returning shortcode instead of echoing
* updated js path in plugin in case the user renames the plugin folder
* updated version number


= 1.2 =

* Added resizing ability to all WordPress themes, no matter what html layout exists
* added shortcode to display controls

= 1.0 =

* initial release