<?php
// Set the correct content type for the response
header("Content-Type: audio/mpegurl");

if (isset($_GET['type']) && $_GET['type'] === 'epg') {
  // Use cURL to fetch the remote XML content
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://lichphatsong.xyz/schedule/beartv_epg.xml');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $epg_content = curl_exec($ch);

  if ($epg_content === false) {
    // Handle error if cURL request fails
    echo "Error fetching EPG data";
  } else {
    // Output the fetched EPG content
    echo $epg_content;
  }

  curl_close($ch);
} else {
  // Use cURL to fetch the remote content
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://gg.gg/bearlivetv');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $livetv_content = curl_exec($ch);

  if ($livetv_content === false) {
    // Handle error if cURL request fails
    echo "Error fetching live TV data";
  } else {
    // Output the fetched live TV content
    echo $livetv_content;
  }

  curl_close($ch);
}
