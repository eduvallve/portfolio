<?php

    include '../../common/utils.php';

    /* Functions */

    function applyProjectsFilter($filter, $data) {
        $filteredProjects = array();
        foreach ($data as $name => $d) {
            // To show highlighted projects th the first page load
            if ($filter === 'highlight' && $d[$filter]) {
                array_push($filteredProjects, $name);
            } else {
                $projectFlag = false;
                foreach ($d['categories'] as $category) {
                    $filterCategory = str_replace(' ','-',strtolower($category));
                    if ($filterCategory === $filter) {
                        $projectFlag = true;
                    }
                }
                $projectFlag ? array_push($filteredProjects, $name) : '' ;
            }
        }
        return $filteredProjects;
    }

    function getProjectTags($project, $data) {
        foreach ($data as $name => $d) {
            if ($name === $project) {
                return $d["tags"];
            }
        }
    }



    /* Behaviour */

    if ($filter && $filter !== '') {
        // Used in the first page load
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json"), true);
    } else if ($_GET['filter'] && $_GET['filter'] !== '') {
        $_GET['filter'] === 'all' ? $filter = 'highlight' : $filter = $_GET['filter'] ;
        $data = json_decode(file_get_contents(getcwd()."/projectsRepo/projectsRepo.json"), true);
    } else {
        $filter = '';
    }

    $filteredProjects = applyProjectsFilter($filter, $data);

    foreach ($filteredProjects as $project) {
        include "projectsRepo/".$project."/".$project.".".$lang.".php";
        $tags = implode(" · ", getProjectTags($project, $data));
        include "projects.template.php";
    }

?>