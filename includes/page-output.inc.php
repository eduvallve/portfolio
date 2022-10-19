<?php
// Set the path for the root directory. 
$parts  = explode('/', $_SERVER[REQUEST_URI]);
array_pop($parts);
$uri = implode('/', $parts);

// Draw the *full* page (not the static HTML - this is grabbed straight from Active CSS).
include 'header.inc.php';
include 'menu.inc.php';
include 'htdocs/pages/'.$pageInclude.'/trad/en.php';
include 'htdocs/pages/index.php';
include 'footer.inc.php';

?>