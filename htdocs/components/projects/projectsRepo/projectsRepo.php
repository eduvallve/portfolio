<?php
// Functions

    function filterProjects($projects) {
        $actualProjects = [];
        foreach ($projects as $project) {
            if (!str_contains($project,'.')) {
                array_push($actualProjects, $project);
            }
        }
        return $actualProjects;
    }

    function isProjectsRepoJson($route) {
        $dir = scandir($route);
        $flag = false;
        foreach ($dir as $d) {
            if (str_contains($d,'.json')) {
                $flag = true;
            }
        }
        return $flag;
    }

    function createProjectsRepoJson() {
        $data = new stdClass();
        // encode array to json
        $json = json_encode($data);
        // generate initial json file
        file_put_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json", $json);
    }

    function diffProjects($projectsDir) {
        $savedProjectsIndexes = [];
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json"), true);
        foreach ($data as $index => $sP) {
            array_push($savedProjectsIndexes, $index);
        }
        $allProjects = array_unique(array_merge($projectsDir, $savedProjectsIndexes));
        $commonProjects = array_intersect($projectsDir, $savedProjectsIndexes);
        $diffProjects = [];
        foreach ($allProjects as $aP) {
            $flag = false;
            foreach ($commonProjects as $cP) {
                $aP === $cP ? $flag = true : '' ;
            }
            !$flag ? array_push($diffProjects, $aP) : '' ;
        }
        return $diffProjects;
    }

    function addNewProjectsToJson($newProjects) {
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json"), true);
        foreach ($newProjects as $np) {
            $data[$np] = array (
                'filters' => array(),
                'date' => array(),
                'tags' => array(),
                'highlight' => false,
                'hidden' => false
              );;
        }
        // encode array to json
        $json = json_encode($data);
        // generate initial json file
        file_put_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json", $json);
    }

    function removeOldProjectsFromJson($oldProjects) {
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json"), true);
        foreach ($oldProjects as $op) {
            $dir = getcwd()."/htdocs/components/projects/projectsRepo/".$op;
            if (!file_exists($dir)) {
                unset($data[$op]);
            }
        }
        // encode array to json
        $json = json_encode($data);
        // generate initial json file
        file_put_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json", $json);
    }

    function updateProjectsRepoJson($projects) {
        $diffProjects = diffProjects($projects);

        if (count($diffProjects) > 0) {
            // Add new projects to JSON file
            addNewProjectsToJson($diffProjects);
            // Remove deleted projects from JSON file
            removeOldProjectsFromJson($diffProjects);
        }
    }

// Main code
    $route = getcwd().'/htdocs/components/projects/projectsRepo';

    $projects = filterProjects(scandir($route));
    if (!isProjectsRepoJson($route)) { // Create a basic JSON file with found subdirectories if not exist yet
        createProjectsRepoJson();
    }
    updateProjectsRepoJson($projects);
?>