<?php
/**
 * activate thumbnail
 */
add_theme_support( 'post-thumbnails' );

/**
 * deploy to vercel when a post is created or updated
 *
 * @return JSON
 */
function deploy_to_vercel() {
  $url = ''; // set Vercel deploy hook api 
	if($url) {
	  $context = array(
      'http' => array(
        'method'  => 'POST',
      )
	  );

	  $json_res = file_get_contents($url, false, stream_context_create($context));
	  return $json_res;
	}
	return false;
}
add_action('save_post', 'deploy_to_vercel');

/**
 *  return wordpress refresh token from GraphQL IDE
 * 
*/
add_filter( 'graphql_jwt_auth_secret_key', function() {
  $refresh_token = ''; // set refresh token
  return $refresh_token;
});

/**
 * redirect to custom preview link
*/
function preview_link($link) {
	global $post;
	$secret = ''; // set preview secret
	$new_link = 'http://localhost:3000/api/preview?secret='.$secret.'&id='.$post->ID;
   return $new_link;
}
add_filter('preview_post_link', 'preview_link');