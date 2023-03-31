<?php
// Functions

    function filterWorks($works) {
        $actualWorks = [];
        foreach ($works as $work) {
            if (!str_contains($work,'.')) {
                array_push($actualWorks, $work);
            }
        }
        return $actualWorks;
    }

    function isWorksRepoJson($route) {
        $dir = scandir($route);
        $flag = false;
        foreach ($dir as $d) {
            if (str_contains($d,'.json')) {
                $flag = true;
            }
        }
        return $flag;
    }

    function createWorksRepoJson() {
        $data = new stdClass();
        // encode array to json
        $json = json_encode($data);
        // generate initial json file
        file_put_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json", $json);
    }

    function diffWorks($worksDir) {
        $savedWorksIndexes = [];
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json"), true);
        foreach ($data as $index => $sW) {
            array_push($savedWorksIndexes, $index);
        }
        $allWorks = array_unique(array_merge($worksDir, $savedWorksIndexes));
        $commonWorks = array_intersect($worksDir, $savedWorksIndexes);
        $diffWorks = [];
        foreach ($allWorks as $aW) {
            $flag = false;
            foreach ($commonWorks as $cW) {
                $aW === $cW ? $flag = true : '' ;
            }
            !$flag ? array_push($diffWorks, $aW) : '' ;
        }
        return $diffWorks;
    }

    function addNewWorksToJson($newWorks) {
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json"), true);
        foreach ($newWorks as $nW) {
            $data[$nW] = array (
                'categories' => array(),
                'date' => array(),
                'tags' => array(),
                'highlight' => false,
                'hidden' => false
              );
        }
        // encode array to json
        $json = json_encode($data);
        // generate initial json file
        file_put_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json", $json);
    }

    function removeOldWorksFromJson($oldWorks) {
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json"), true);
        foreach ($oldWorks as $oW) {
            $dir = getcwd()."/htdocs/components/otherWorks/otherWorksRepo/".$oW;
            if (!file_exists($dir)) {
                unset($data[$oW]);
            }
        }
        // encode array to json
        $json = json_encode($data);
        // generate initial json file
        file_put_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json", $json);
    }

    function updateWorksRepoJson($works) {
        $diffWorks = diffWorks($works);
        if (count($diffWorks) > 0) {
            // Add new Works to JSON file
            addNewWorksToJson($diffWorks);
            // Remove deleted Works from JSON file
            removeOldWorksFromJson($diffWorks);
        }
    }

// Main code
    $route = getcwd().'/htdocs/components/otherWorks/otherWorksRepo';
    $works = filterWorks(scandir($route));
    if (!isWorksRepoJson($route)) { // Create a basic JSON file with found subdirectories if not exist yet
        createWorksRepoJson();
    }
    updateWorksRepoJson($works);
?>