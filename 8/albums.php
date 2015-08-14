<?php
/**
 * Server-side PHP script that generates a list of albums (in JSON format)
 */

// TODO

$albums = array(
  'coldplay' => array(
    'title' => 'A Rush of Blood to the Head',
    'cover' => "images\coldplay-cover.jpg",
    'tracks' => array(
      array('track' => 'Politik', 'time' => sec(5,19)),
      array('track' => 'In My Place', 'time' => sec(3,46)),
      array('track' => 'God Put a Smile Upon Your Face', 'time' => sec(4,57)),
      array('track' => 'The Scientist', 'time' => sec(5,9)),
      array('track' => 'Clocks', 'time' => sec(5,7)),
      array('track' => 'Daylight', 'time' => sec(5,27)),
      array('track' => 'Green Eyes', 'time' => sec(3,43)),
      array('track' => 'Warning Sign', 'time' => sec(5,31)),
      array('track' => 'A Whisper', 'time' => sec(3,58)),
      array('track' => 'A Rush of Blood to the Head', 'time' => sec(5,51)),
      array('track' => 'Amsterdam', 'time' => sec(5,19))
    )
  ),
  'gunsnroses' => array(
    'title' => 'Greatest Hits',
    'cover' => 'http://upload.wikimedia.org/wikipedia/en/3/36/GreatestHits_Guns%27n%27Roses.jpg',
    'tracks' => array(
      array('track' => 'Welcome to the Jungle', 'time' => sec(4,34)),
      array('track' => 'Sweet Child O\' Mine', 'time' => sec(3,21)),
      array('track' => 'Patience', 'time' => sec(5,56)),
      array('track' => 'Paradise City', 'time' => sec(6,46)),
      array('track' => 'Knockin\' on Heaven\'s Door', 'time' => sec(5,35)),
      array('track' => 'Civil War', 'time' => sec(7,42)),
      array('track' => 'You Could Be Mine', 'time' => sec(5,44)),
      array('track' => 'Don\'t Cry (original)', 'time' => sec(4,43)),
      array('track' => 'November Rain', 'time' => sec(8,56)),
      array('track' => 'Live & Let Die', 'time' => sec(3,4)),
      array('track' => 'Yesterday\'s', 'time' => sec(3,16)),
      array('track' => 'Ain\'t It Fun', 'time' => sec(5,4)),
      array('track' => 'Since I Don\'t Have You', 'time' => sec(4,19)),
      array('track' => 'Sympathy for the Devil', 'time' => sec(7,18))
    )
  )
);

function sec($min, $sec) {
  return $min*60+$sec;
}

function getTitles($albums) {
  $titles['albums'] = array();
  foreach($albums as $album) {
    array_push($titles['albums'], $album['title']);
  }
  return $titles;
}

$json = json_encode(getTitles($albums));
echo $json;
