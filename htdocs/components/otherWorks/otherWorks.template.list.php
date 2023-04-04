<?php
if ($filter === '3d-modelling') {
    $filterName = $td_modelling;
} else if ($filter === 'animation-video') {
    $filterName = $animation_video;
} else if ($filter === 'motion-graphics') {
    $filterName = $motion_graphics;
}
?>

<div class="col-4">
    <?php if ($filter === 'motion-graphics') { ?>
        <div class="animation__<?= $filter ?>">
            <img src="<?= $uri ?>/htdocs/components/otherWorks/uploads/heart-cyan.svg" class="heart heart__<?= $filter ?>" alt="">
            <img src="<?= $uri ?>/htdocs/components/otherWorks/uploads/heart-red.svg" class="heart-doubled heart__<?= $filter ?>" alt="">
            <img src="<?= $uri ?>/htdocs/components/otherWorks/uploads/heart-black.svg" class="heart-doubled heart-back heart__<?= $filter ?>" alt="">
        </div>
    <?php } else { ?>
    <img src="<?= $uri ?>/htdocs/components/otherWorks/uploads/heart.svg" class="heart heart__<?= $filter ?>" alt="">
    <?php } ?>
    <h4><?= $filterName ?></h4>
    <div class="<?= $component ?>__list--items">
        <?php include $component.".filter.php"; ?>
    </div>
</div>