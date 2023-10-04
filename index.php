<?php 

require('vendor/autoload.php');

use DiDom\Document;

$document = new Document('https://www.searates.com/port/cape_town_za', true);

$posts = $document->find('.incoterms-block__item');

foreach($posts as $post) {
    echo $post->text(), "<br>";
}