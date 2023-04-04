<?php

    /* Behaviour */

    if ($filter && $filter !== '') {
        // Used in the first page load
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/otherWorks/otherWorksRepo/otherWorksRepo.json"), true);
    } else if ($_GET['filter'] && $_GET['filter'] !== '') {
        $_GET['filter'] === 'all' ? $filter = 'highlight' : $filter = $_GET['filter'] ;
        $data = json_decode(file_get_contents(getcwd()."/otherWorksRepo/otherWorksRepo.json"), true);
    } else {
        $filter = '';
    }

    $filteredWorks = applyFilterWorks($filter, $data);

    foreach ($filteredWorks as $work) {
        include "otherWorksRepo/".$work."/".$work.".".$lang.".php";
        $tags = implode(" · ", getWorkTags($work, $data));
        include "otherWorks.template.item.php";
    }
?>