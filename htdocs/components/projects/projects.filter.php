<?php
    if ($filter && $filter !== '') {
        // Used in the first page load
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json"), true);
    } else if ($_GET['filter'] && $_GET['filter'] !== '') {
        $filter = $_GET['filter'];
        $data = json_decode(file_get_contents(getcwd()."/projectsRepo/projectsRepo.json"), true);
    } else {
        $filter = '';
    }

    applyFilter($filter, $data);

    function applyFilter($filter, $data) {
        $filteredProjects = array();
        foreach ($data as $name => $d) {
            // To show highlighted projects th the first page load
            if ($filter === 'highlight' && $d[$filter]) {
                array_push($filteredProjects, $name);
            }
        }

        showProjects($filteredProjects, $data);
    }

    function getProjectTags($project, $data) {
        foreach ($data as $name => $d) {
            if ($name === $project) {
                return $d["tags"];
            }
        }
    }

    function showProjects($projects, $data) {
        foreach ($projects as $project) {
            include "projectsRepo/".$project."/".$project.".en.php";
            $tags = implode(" · ", getProjectTags($project, $data));
            include "projects.template.php";
        }
    }
?>