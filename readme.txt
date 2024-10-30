=== Plugin Name ===
Contributors: a-bishop
Donate link: http://a-bishop.spb.ru/wordpress/
Tags: comments, livejournal
Requires at least: 2.0.5
Tested up to: 2.1.3
Stable tag: 1.0.3

This plugin displayes a number of comments in posts crossposted to LiveJournal.

== Description ==

This plugin displayes a number of comments in posts crossposted ( http://ebroder.net/livejournal-crossposter/ ) to LiveJournal. You can see how if works here: http://a-bishop.livejournal.com/.

== Installation ==

Place lj-comments.php to your plugins folder and activate it in control panel.
Place wp-comments-php to WordPress root folder.

In lj-crosspost.php add the following string where it is needed:
<?php lj_comments($post_id);?>

EXAMPLE:

// Depending on whether comments are allowed or not, alter the header
// appropriately
if($comments) {
$postHeader .= sprintf(__(' You can comment here or <a href="%s#comments">there</a>.', LJXP_DOMAIN), get_permalink($post_id));
$postHeader .=  lj_comments($post_id);
}
else {
	$postHeader .= sprintf(__(' Please leave any <a href="%s#comments">comments</a> there.', LJXP_DOMAIN), get_permalink($post_id));
	$postHeader .=  lj_comments($post_id);
}

$postHeader .= '</b></p>';