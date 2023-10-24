<?php
include 'htdocs/common/utils.php';

// Draw the *full* page (not the static HTML - this is grabbed straight from Active CSS).
include 'header.inc.php';
include 'menu.inc.php';
include 'htdocs/pages/'.$pageInclude.'/trad/'.$lang.'.php';
include 'htdocs/pages/index.php'; // This file loads required components or content pages
include 'footer.inc.php';

?>