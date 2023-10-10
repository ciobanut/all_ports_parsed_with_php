<?php
require('functions.php');

$links_to_countries = getCountries();
//$links_to_countries = ['https://www.searates.com/maritime/belgium'];

use DiDom\Document;

foreach($links_to_countries as $link) {
    echo $link, "<br>";


	$document = new Document($link, true);

	$cities = $document->find('.ports li a');

	foreach($cities as $post) {
		$link = 'https://www.searates.com'. $post->attr('href');

		echo $link, "<br>";
		//put_in_file([$link], 'cities.csv');
	}

	//break;
}


