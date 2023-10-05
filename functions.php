<?php
// Your PHP code here

require('vendor/autoload.php');

$contries = require('contries.php');

// use DiDom\Document;

// $document = new Document('https://www.searates.com/maritime/', true);

// $posts = $document->find('.countries');

// foreach($posts as $post) {
//     echo $post->html(), "<br>";
// }

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'callPhpFunction') {
        $param1 = isset($_POST['param1']) ? intval($_POST['param1']) : 0;
        $param2 = isset($_POST['param2']) ? intval($_POST['param2']) : 0;
        
        // Call the PHP function
        $result = myPhpFunction($param1, $param2);
        
        // Return the result
        echo $result;
        exit;
    }
}

// Include your other functions or code here
function myPhpFunction($param1, $param2) {
    return "Result: " . ($param1 + $param2);
}
?>
