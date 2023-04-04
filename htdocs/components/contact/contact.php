<?php
$component = "contact";
$compRoute = "/htdocs/components/".$component."/".$component."_uploads/";
?>
<section class="<?= $component ?>">
  <main class="<?= $component ?>__main">
    <div class="cols"></div>
    <div class="cols">
      <div class="col-4">
        <div class="col-12 <?= $component ?>__main-title">
          <?= $title ?>
        </div>
        <div class="col-12 <?= $component ?>__main-description">
          <?= $description ?>
        </div>
        <div class="col-12 <?= $component ?>__main-cta">
          <a class="btn btn__secondary icon icon__greet" href="#" target="_blank"><?= $say_hello ?></a>
        </div>
      </div>
    </div>
    <div class="cols">
      <div class="col-12">
        <div class="rights_line">
        <?= $designed ?> © Eduard Vallvé, <?= date("Y") ?>. <?= $rights_reserved ?>
        </div>
      </div>
    </div>
  </main>
  <div class="<?= $component ?>__animation">
    <div class="<?= $component ?>__animation--stars"></div>
  </div>
  <div class="<?= $component ?>__bg"></div>
</section>