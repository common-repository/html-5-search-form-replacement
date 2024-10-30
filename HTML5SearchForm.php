<?php

/*
Plugin Name: HTML 5 Search Form
Plugin URI: hhttp://createmy.com.au/quick-tip-changing-the-wordpress-search-form-to-html5/
Description: This plugin will change your WordPress search form to a HTML 5 search form.
Version: 1.0
Author: Dale Hurley
Author URI: http://createmy.com.au
License: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
  	
  	Copyright 2010 Dale Hurley  (email : dale@createmy.com.au)

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

if (!class_exists("HTML5_search_form"))//check that there is no other classes like this
{
	class HTML5_search_form //it takes class to use classes 
	{
		function my_html5_search_form( $form )
		{
		    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		    <section class="search"><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
		    <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search '. get_bloginfo( 'name') .'" />
		    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
		    </section>
		    </form>';
		    return $form;
		}
	
		function HTML5_search_form()
		{
			add_filter( 'get_search_form', array(&$this, 'my_html5_search_form') );
		}
	}
	$HTML5_search_form=new HTML5_search_form;//create the new object
}//end the check class exists