<?php
include 'htdocs/common/utils.php';

// Initial basic values
$pageInclude = 'project';
$pageTitle = 'Single project';
$pageContent = ['default_project'];

/***
 * 
 * There is a basic default information for a project page.
 * We must check if the product is enabled in projectsRepo or otherWorksRepo. If that's the case,
 * import $title and build the proper page.
 * 
***/

$projectID = $_GET['id'];

// Import content from ProjectsRepo AND/OR OtherWorks if the project exists there too
$projectsRepoRef = 'htdocs/components/projects/projectsRepo/'.$projectID.'/'.$projectID.'.'.$lang.'.php';
$otherWorksRepoRef = 'htdocs/components/otherWorks/otherWorksRepo/'.$projectID.'/'.$projectID.'.'.$lang.'.php';
if (file_exists($projectsRepoRef)) {
    include $projectsRepoRef;
    $projectDetails = json_decode(file_get_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json"), true)[$projectID];
} else if (file_exists($otherWorksRepoRef)) {
    include $otherWorksRepoRef;
    $projectDetails = json_decode(file_get_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json"), true)[$projectID];
}

function projectExists($projectID) {
    return file_exists('htdocs/pages/project/'.$projectID.'/'.$projectID.'.php');
}

// In case of project reference in the URL, update values accordingly
if ($projectID && projectExists($projectID)) {
    $pageTitle = $title;
    $pageContent = [$projectID];
}

/***
 * 
 * End of customized project page.
 * 
***/


// Output the page.
include 'includes/page-output.inc.php';

?>