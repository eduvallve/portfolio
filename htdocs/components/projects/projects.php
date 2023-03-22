<?php
  include "htdocs/common/utils.php";
  include "projectsRepo/projectsRepo.php";
?>

<!-- Tweenlite -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

<section class="projects">
  <main class="projects__main">
    <div class="cols">
      <div class="col-8 cols">
        <div class="col-12 projects__main-title">
          <?php
          include "projects.filterCategory.php";
          ?>
        </div>
        <div class="col-12 projects__list">
          <?php
            $filter = "highlight";
            include "projects.filter.php";
          ?>
        </div>
      </div>
    </div>
  </main>
  <div class="projects__animation">
  </div>
</section>