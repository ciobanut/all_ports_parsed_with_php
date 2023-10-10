<?php
// Your PHP code here

require('vendor/autoload.php');



// use DiDom\Document;

// $document = new Document('https://www.searates.com/maritime/', true);

// $posts = $document->find('.countries');

// foreach($posts as $post) {
//     echo $post->html(), "<br>";
// }

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'callPhpFunction') {
        $link = isset($_POST['link']) ? intval($_POST['link']) : 0;
        
        // Call the PHP function
        $result = myPhpFunction($link);
        
        // Return the result
        echo $result;
        exit;
    }
}

// Include your other functions or code here
function put_in_file($link, $file) {

	$fp = fopen($file, 'a');

	fputcsv($fp, $link);

	fclose($fp);
    
}

function getCountries () {
	$lines = [];
	if (($handle = fopen("countries.csv", "r")) !== FALSE) {
		while (($line = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$lines[] = $line[0];
		}
	}
	return $lines;
}

function getLastLineCSV() : string {
	$row = 1;
	if (($handle = fopen("file.csv", "r")) !== FALSE) {
		while (($line = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$lines[] = $line;
		}
		$last = count($lines) - 1;
		fclose($handle);
		return $lines[$last][0];
	}
}

/*
// all links
$document->find('a');

// any element with id = "foo" and "bar" class
$document->find('#foo.bar');

// any element with attribute "name"
$document->find('[name]');
// the same as
$document->find('*[name]');

// input field with the name "foo"
$document->find('input[name=foo]');
$document->find('input[name=\'bar\']');
$document->find('input[name="baz"]');

// any element that has an attribute starting with "data-" and the value "foo"
$document->find('*[^data-=foo]');

// all links starting with https
$document->find('a[href^=https]');

// all images with the extension png
$document->find('img[src$=png]');

// all links containing the string "example.com"
$document->find('a[href*=example.com]');

// text of the links with "foo" class
$document->find('a.foo::text');

// address and title of all the fields with "bar" class
$document->find('a.bar::attr(href|title)');
*/
?>
