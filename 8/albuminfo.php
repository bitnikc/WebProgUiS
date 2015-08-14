<?php
/**
 * Server-side PHP script that returns detailed information about a given album
 * (in JSON format)
 */

// TODO

include('albums.php');

function albumDetails($album, $albums) {
  $details[$album] = $albums[$album];
  return $details;
}

echo json_encode(albumDetails('coldplay', $albums));
