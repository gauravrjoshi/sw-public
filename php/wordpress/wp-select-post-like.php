<?php
global $wpdb;
$searchTerm = "dont-use-test";

$myposts = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->posts WHERE post_name LIKE '%or'", '%' . $wpdb->esc_like($searchTerm) . '%'));

//echo "<pre>";
//print_r($myposts);


if ((count($myposts)) > 0) {
    //echo '<pre>';
    foreach ($myposts as $mypost) {
        //$post = get_post( $mypost );
        //print_r($mypost);
        //setup_postdata($mypost); 
        echo '<h4> <a href="' . get_permalink($mypost->ID) . '">' . $mypost->post_title . '</a> </h4>';
    }
}
