<?php
  $component = "otherWorks";
  include "htdocs/common/utils.php";
  include $component."Repo/".$component."Repo.php";
?>

<section class="<?= $component ?>">
  <main class="<?= $component ?>__main">
    <div class="cols">
      <div class="col-8 cols">
        <div class="col-12 <?= $component ?>__main-title">
          <?= $comp_header ?>
        </div>
        <div class="col-12 cols <?= $component ?>__list">
        <?php
            include $component.".filterFunctions.php";

            $filter = "3d-modelling";
            include $component.".template.list.php";

            $filter = "animation-video";
            include $component.".template.list.php";

            $filter = "motion-graphics";
            include $component.".template.list.php";
        ?>
        </div>
      </div>
    </div>
  </main>
  <div class="<?= $component ?>__animation">
  </div>
</section>