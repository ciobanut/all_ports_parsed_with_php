<?php 

require('vendor/autoload.php');

$contries = require('contries.php');

// use DiDom\Document;

// $document = new Document('https://www.searates.com/maritime/', true);

// $posts = $document->find('.countries');

// foreach($posts as $post) {
//     echo $post->html(), "<br>";
// }


include('layout/header.php');


foreach($contries as $post) {
    echo $post, "<br>";
}

include('layout/footer.php');