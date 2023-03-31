<?php

    /* Functions */

    function applyFilterWorks($filter, $data) {
        $filteredWorks = array();
        foreach ($data as $name => $d) {
            if ($filter === 'highlight' && $d[$filter]) { // To show highlighted works th the first page load
                array_push($filteredWorks, $name);
            } else {
                $workFlag = false;
                foreach ($d['categories'] as $category) {
                    $filterCategory = str_replace(' ','-',strtolower($category));
                    if ($filterCategory === $filter) {
                        $workFlag = true;
                    }
                }
                $workFlag ? array_push($filteredWorks, $name) : '' ;
            }
        }
        return $filteredWorks;
    }

    function getWorkTags($work, $data) {
        foreach ($data as $name => $d) {
            if ($name === $work) {
                return $d["tags"];
            }
        }
    }

?>