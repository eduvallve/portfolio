<div class="projects__filter-category--filterlist">
    <span class="projects__filter-category active" data-filter="all">All works</span>
    <?php
        $data = json_decode(file_get_contents(getcwd()."/htdocs/components/projects/projectsRepo/projectsRepo.json"), true);
        // print_r($data); echo '<br>';
        $allCategories = [];
        foreach ($data as $project) {
            if ($project["categories"] !== '') {
                $allCategories = array_merge($allCategories, $project["categories"]);
            }
        }
        $allCategories = array_unique($allCategories);
        sort($allCategories);
        foreach ($allCategories as $category) {
            echo  '<span class="projects__filter-category" data-filter="'.$category.'">'.$category.'</span>';
        }
    ?>
</div>