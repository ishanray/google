<?php

$html = file_get_contents("http://www.google.com/search?q=facebook&num=100");

preg_match_all('/<cite>(.*?)<\/cite>/', $html, $matches, PREG_PATTERN_ORDER); 

$results = $matches[0];

var_dump($results);

print_r($results);
