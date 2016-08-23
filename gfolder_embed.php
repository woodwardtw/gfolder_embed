<?php
/**
 * Plugin Name: Embed a Google Drive Folder w the unique folder ID 
 * Plugin URI: https://github.com/woodwardtw/gfolder_embed
 * Description: Embed your Google Drive Folder via the unique ID. You can also define a list or grid view via the style parameter. [gdrive id="YourFolderID" style="Grid or List" width="" height=""]
 * Version: 1.1
 * Author: Tom Woodward
 * Author URI: http://bionicteaching.com
 * License: GPL2
 */
 
 /*   2014  PLUGIN_AUTHOR_NAME  (email : bionicteaching@gmail.com)
 
 	This program is free software; you can redistribute it and/or modify
 	it under the terms of the GNU General Public License, version 2, as 
 	published by the Free Software Foundation.
 
 	This program is distributed in the hope that it will be useful,
 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 	GNU General Public License for more details.
 
 	You should have received a copy of the GNU General Public License
 	along with this program; if not, write to the Free Software
 	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 
//[gdrive id="YourFolderID" style="Grid or List" width="" height=""]
 
function gdrive_shortcode($atts, $content=null) {
    $a = shortcode_atts( array(
         'id' => '',
         'style' => 'list',
         'width' => '100%',
         'height' => '500px',
    ), $atts); 
	return '<iframe src="https://drive.google.com/embeddedfolderview?id=' . $a['id'] . '#' . $a['style'] . '" frameborder="0" width="' . $a['width'] . '" height="' . $a['height'].'" scrolling="auto"> </iframe>';
}
add_shortcode( 'gdrive', 'gdrive_shortcode' );