<!DOCTYPE html>
<html lang="en">
<head>
    <title>Word statistics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Word statistics</h1>
<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

include "WordStat.class.php";

$config = array(
    'filename' => "testfile.txt",
    'min_wordlength' => 3,
    'top_words' => 100
);

$ws = new WordStat($config);
?>

<div id="stat">
    <h2>Input</h2>
    <?php $ws->stat(); ?>
</div>

<div id="hist">
    <h2>Histogram</h2>
    <?php $ws->histogram(); ?>
</div>

<div id="wordcloud">
    <h2>Word cloud</h2>
    <?php $ws->wordcloud(array("word_xs", "word_s", "word_m", "word_l", "word_xxl")); ?>
</div>

</body>
</html>
