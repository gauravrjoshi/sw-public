<?php
// Lets get the page slug
global $post;
$post_slug=$post->post_name;
// For display the data we need to echo it
echo $post_slug;
