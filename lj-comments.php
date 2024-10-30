<?php
/*
Plugin Name: LiveJournal Comments
Plugin URI: http://a-bishop.spb.ru/wordpress/
Description: This plugin displayes a number of comments in posts <a href="http://ebroder.net/livejournal-crossposter/">crossposted</a> to LiveJournal. You can see how if works <a href="http://a-bishop.livejournal.com">here</a>.
Version: 1.0.3
Author: Alexander Bishop
Author URI: http://a-bishop.spb.ru/

CHANGES
2007-06-26 readme.txt rewritten accordingly to WordPress.org plugins list.
2006-06-12 readme.txt rewritten. Hopefully now it's clear how to change lj-crosspost.php
2006-06-06 Initial release
*/
function lj_comments($post_id)
{
        $link = "http://".$hostname = getenv("HTTP_HOST")."/wp-lj-comments.php?post_id=".$post_id;
	return '<img src="'.$link.'" border="0">';
}
?>
