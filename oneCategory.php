<?php
/*
Plugin Name: One Category Per Post
Plugin URI: https://github.com/nuekleer/oneCat
Description: Limit posts to one category. 
Author: Matt Christensen
Version: 1.1
Author URI: http://www.mattchristensen.net
*/

if(
	strstr($_SERVER['REQUEST_URI'], 'wp-admin/post-new.php') ||
	strstr($_SERVER['REQUEST_URI'], 'wp-admin/post.php') ||
	strstr($_SERVER['REQUEST_URI'], 'wp-admin/edit.php')

	) {
ob_start('one_category_only');
}
function one_category_only($content) {
$content = str_replace('type="checkbox" name="post_category[]" ', 'type="radio" name="post_category[]" ', $content);
return $content;
}

?>
