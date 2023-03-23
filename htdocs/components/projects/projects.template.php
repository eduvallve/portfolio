<?php // Set the path for the root directory.
$parts  = explode('/', $_SERVER[REQUEST_URI]);
array_pop($parts);
$uri = implode('/', $parts);
?>

<div id="proj__<?php echo $project; ?>" class="col-12 cols projects__item">
    <div class="col-7 projects__item--img" <?php
        ($bgImg || $bgColor) ? $inline_style = true : $inline_style = false ;
        if ($inline_style) { echo 'style="'; }
        if ($bgImg) { echo 'background-image: url('.$uri.'/'.$bgImg.');'; }
        if ($bgColor) { echo 'background-color:'.$bgColor.';'; }
        if ($inline_style) { echo '"'; }
        ?>>
        <?php if ($thumbnailImg) { ?>
            <picture>
                <?php if ($mobilethumbnailImg) { ?>
                    <source srcset="<?php echo $uri; ?>/<?php echo $mobilethumbnailImg; ?>" media="(max-width: 767px)" />
                <?php } ?>
                <img src="<?php echo $uri; ?>/<?php echo $thumbnailImg; ?>" alt="<?php echo $project; ?>">
            </picture>
        <?php } ?>
    </div>
    <div class="col-6">
        <h3 class="projects__item--title"><?php echo $title; ?></h3>
        <?php if ($client) { ?>
            <p class="projects__item--tagline">client :: <b><?php echo $client; ?></b></p>
        <?php } ?>
        <p class="projects__item--description"><?php echo $description; ?></p>
        <span class="projects__item--tags"><?php echo $tags; ?></span>
    </div>
</div>