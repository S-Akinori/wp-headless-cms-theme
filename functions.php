<?php

/**
 * deploy to vercel when a post is created or updated
 *
 * @return JSON
 */
function deploy_to_vercel() {
  $url = ''; // set Vercel deploy hook api 

  $context = array(
    'http' => array(
      'method'  => 'POST',
    )
  );

  $json_res = file_get_contents($url, false, stream_context_create($context));
  return $json_res;
}
add_action('save_post', 'deploy_to_vercel');