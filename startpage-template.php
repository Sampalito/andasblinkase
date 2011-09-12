<?php
/**
 * Template Name: Start Page
 *
 * @package WordPress
 * @subpackage openbrand
 * @since Openbrand 1.0
 */

get_header(); ?>
		   <?php include (TEMPLATEPATH . '/loop-slide.php'); ?>
		   
	<div id="colls-960">
      	<ul>
		    <li id="col" class="col-left">
				<?php if(function_exists('iinclude_page')) iinclude_page(65,'displayTitle=true&titleBefore=<h2 class="sidebar-header">'); ?>
		    </li>
		    <li id="col" class="col-right">
				<?php if(function_exists('iinclude_page')) iinclude_page(70,'displayTitle=true&titleBefore=<h2 class="sidebar-header">'); ?>
			</li>
      	</ul>
	</div>
      

<?php get_footer(); ?>
