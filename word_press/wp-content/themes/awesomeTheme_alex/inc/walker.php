<?php

// collection of walker function
/*

	//wp nav menu following generates predifend html structure for menu
	wp-nav_menu();

	<ul> start_lvl()
		<li><a></a></li> start_el() which includes opening li, a and span tag
		<li><a></a></li>
		<li><a></a></li>
		<li><a></a></li>
		<li><a></a></li> end_el() which includes closing li, a and span tag
	</ul> end_lvl
*/

class Walker_Nav_Primary extends Walker_Nav_menu{

	function start_lvl(&$output, $depth, $args = array()){ //  <ul>
		$indent = str_repeat('\t', $depth);
		$submenu = ($depth > 0) ? ' submenu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";

	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){ // <li> <a> <span>

	}

	/*function end_lvl(){ // </li> </a> </span>

	}

	function end_lvl(){ // </ul>

	}*/

}