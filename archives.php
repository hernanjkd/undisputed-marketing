<?php

include('blog/wp-load.php');

get_header();

echo '<h2 style="color:#990000;padding-bottom:50px">Archives</h2>';

echo '<table id="archives"><tr><td style="color:#990000;font-size:1.3em">Title</td><td style="color:#990000;font-size:1.3em;width:100px">Date <span style="padding:0px;color:black;font-size:0.8em;font-weight:normal">(2010)</span> </td></tr>';


$posts = get_posts('numberposts=-1&order=DESC&orderby=post_date');
foreach ($posts as $post) { 

	start_wp();

 	echo '<tr> <td> <a href="';

	the_permalink();
	echo '">';
	the_title();
    
	echo '</a> </td> <td style="font-weight:normal">';

	the_time('F j');

	echo '</td></tr>';
}

echo '</table>';


get_sidebar();
get_footer();

?>