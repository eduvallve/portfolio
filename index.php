<?php
// Index page. This is the first page that the web server finds.
$pageInclude = 'index';
$pageTitle = 'Hi!';
$pageComponents = ['brief','basicInformation','projects'];

// Output the page.
include 'includes/page-output.inc.php';

?>