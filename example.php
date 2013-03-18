<html>
<head>
        <meta charset="utf-8">
</head>

<?php

// Create an instance of the tbFlickr class

require_once 'tbPhpFlickr.php';

// List the names of the first 50 sets
$tbPhpFlickr = new tbPhpFlickr(false);
$tbPhpFlickr->photosets_getList(1, 50);

$sets = $tbPhpFlickr->parsed_response['photosets']['photoset'];
foreach ($sets as $set) {
    echo $set['title']."<br />";
}

?>
</html>