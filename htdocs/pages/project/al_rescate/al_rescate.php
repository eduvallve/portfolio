<?php
$page = "projectPage";
?>
<header class="<?= $page ?>__header">
    <h1 class="<?= $page ?>__title col-8"><?= $title ?></h1>
</header>
<section class="<?= $page ?>__body">
    <p class="<?= $page ?>__description col-8"><?= $description ?></p>
    <div class="<?= $page ?>__meta--information col-8">
        <span class="<?= $page ?>__client col-6"><?= $client ?></span>
        <span class="<?= $page ?>__date col-6"><?= $projectDetails['date'][0] ?></span>
    </div>
    <?php /***
     * 
     * Custom project content starts HERE
     * 
     */ ?>
    <div class="<?= $page ?>__video--gameplay col-8"></div>
    <div class="<?= $page ?>__content--text col-6">
        <p class="<?= $page ?>__summary"><?= $SUMMARY ?></p>
        <h2 class="<?= $page ?>__title"><?= $CHAR_MODELLING ?></h2>
        <p><?= $CHAR_MODELLING_TEXT_01 ?></p>
    </div>
    <div class="<?= $page ?>__gallery <?= $page ?>__gallery--<?= $projectID ?> col-12">/* gallery here */</div>
    <div class="<?= $page ?>__content--text col-6">
        <h2 class="<?= $page ?>__title"><?= $CHAR_ANIMATION ?></h2>
        <p><?= $CHAR_ANIMATION_TEXT_01 ?></p>
    </div>
    <div class="<?= $page ?>__media <?= $page ?>__media--<?= $projectID ?> col-8">/* media here */</div>
    <div class="<?= $page ?>__media <?= $page ?>__media--<?= $projectID ?> col-8">/* media here */</div>
    <div class="<?= $page ?>__content--text col-6">
        <h2 class="<?= $page ?>__title"><?= $CONCEPT_ARTS ?></h2>
        <p><?= $CONCEPT_ARTS_TEXT_01 ?></p>
    </div>
    <div class="<?= $page ?>__media <?= $page ?>__media--<?= $projectID ?> col-8">/* media here */</div>
    <div class="<?= $page ?>__content--text col-6">
        <p><?= $CONCEPT_ARTS_TEXT_02 ?></p>
    </div>
    <div class="<?= $page ?>__media <?= $page ?>__media--<?= $projectID ?> col-8">/* media here */</div>
    <div class="<?= $page ?>__content--text col-6">
        <p><?= $CONCEPT_ARTS_TEXT_03 ?></p>
    </div>
    <div class="<?= $page ?>__media <?= $page ?>__media--<?= $projectID ?> col-8">/* media here */</div>
    <div class="<?= $page ?>__content--text col-6">
        <p><?= $CONCEPT_ARTS_TEXT_04 ?></p>
    </div>
    <div class="<?= $page ?>__content--text col-6">
        <h2 class="<?= $page ?>__title"><?= $ARTIFACTS ?></h2>
        <p><?= $ARTIFACTS_TEXT_05 ?></p>
    </div>
    <div class="<?= $page ?>__gallery <?= $page ?>__gallery--<?= $projectID ?>--two col-12">/* gallery here */</div>
    <?php /***
     * 
     * Custom project content ends HERE
     * 
     */ ?>
    <div class="<?= $page ?>__content--text col-6">
        <p class="<?= $page ?>__tags"><?= implode(" · ", $projectDetails['tags']) ?></p>
    </div>
</section>
<footer>
    <p>Designed and built by © Eduard Vallvé, 2023. All rights reserved.</p>
</footer>