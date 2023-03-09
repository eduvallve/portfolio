<?php
  include "htdocs/common/utils.php";
  include "projectsRepo/projectsRepo.php";
?>

<section class="projects">
  <main class="projects__main">
    <div class="cols">
      <div class="col-8 cols">
        <h2 class="col-12 projects__main-title">All</h2>

        <?php
          $filter = "highlight";
          include "projects.filter.php";
        ?>

      </div>
    </div>
  </main>
  <div class="projects__animation">
  </div>
</section>