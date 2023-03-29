<?php
  $component = "projects";

  include "htdocs/common/utils.php";
  include $component."Repo/".$component."Repo.php";
  /* Tweenlite JS in a PHP file */
  include $component.".tweenmax.min.php";
?>

<section class="<?= $component ?>">
  <main class="<?= $component ?>__main">
    <div class="cols">
      <div class="col-8 cols">
        <div class="col-12 <?= $component ?>__main-title">
          <?php
          include $component.".filterCategory.php";
          ?>
        </div>
        <div class="col-12 <?= $component ?>__list">
          <?php
            $filter = "highlight";
            include $component.".filter.php";
          ?>
        </div>
      </div>
    </div>
  </main>
  <div class="<?= $component ?>__animation">
  </div>
</section>