<?php

include('blog/wp-load.php');

get_header();


$count = 1;
$posts = get_posts('numberposts=5&order=DESC&orderby=post_date');
foreach ($posts as $post) { 

	start_wp();

	$author = get_the_author();
	$date = get_the_time(get_option('date_format'));

	echo '<img width="62" height="82" style="float:left;border:solid #cccccc 1px"
		src="/blog/wp-content/profile-pics/'. $author .'.jpg" />
		<div class="wp_post_info">Posted by: '. $author .'<br />'. $date 
		.'</div class="post_info">';

 	echo '<div class="wp_title"><a href="';

	the_permalink();
	echo '">';
	the_title();
    
	echo '</a> </div class="wp_title"><div class="wp_content">';
 	
	the_content('&raquo; (more)');

	echo '</div class="wp_content">';

	if ($count < 5) {
	    $count++;
	    echo '<hr />';
	}
}


get_sidebar();
get_footer();

?>

