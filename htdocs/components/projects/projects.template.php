<?php
// Set the path for the root directory.
$parts  = explode('/', $_SERVER[REQUEST_URI]);
array_pop($parts);
$uri = implode('/', $parts);

$component = "projects";
$compRoute = "/htdocs/components/".$component."/".$component."Repo/".$project."/uploads/";

$uri = explode('/htdocs', $uri)[0];

// $bgImg is set as a constant used image
if (!$bgImg || $bgImg === '') {
    $bgImg = "bg-002-1200.png";
}

if (!$linkText || $linkText === '') {
    $linkText = 'Click me';
}
?>

<div id="proj__<?= $project ?>" class="col-12 cols projects__item">
    <div class="col-7 projects__item--img" <?php
        /* Image box - start */
        ($bgImg || $bgColor) ? $inline_style = true : $inline_style = false ;
        if ($inline_style) { echo 'style="'; }
        if ($bgImg) { echo 'background-image: url('.$uri.'/uploads/media/'.$bgImg.');'; }
        if ($bgColor) { echo 'background-color:'.$bgColor.';'; }
        if ($inline_style) { echo '"'; }
        ?>>
        <?php /* In case we do have a thumbanil image declared */
            if ($thumbnailImg) { ?>
            <picture>
                <?php /* Declaring thumbnail useful variables */
                    $thumbnailImg = $uri.$compRoute.$thumbnailImg;
                    $thumbnailImgNoFormat = explode('.',$thumbnailImg)[0];
                    $thumbnailImgFormat = explode('.',$thumbnailImg)[1];
                ?>

                <source type="image/webp" <?php
                    if ($mobileThumbnailImg) { ?>
                        media="(min-width:768px)"
                    <?php } ?> srcset="<?= $thumbnailImgNoFormat.'.webp' ?>" />

                <source type="image/<?= $thumbnailImgFormat ?>" <?php
                    if ($mobileThumbnailImg) { ?>
                        media="(min-width:768px)"
                    <?php } ?> media="(min-width:768px)" srcset="<?= $thumbnailImg ?>" />

                <?php /* In case we do have a thumbanil image specific for mobiles */
                    if ($mobileThumbnailImg) {
                        /* Declaring mobile thumbnail useful variables */
                        $mobileThumbnailImg = $uri.$compRoute.$mobileThumbnailImg;
                        $mobileThumbnailImgNoFormat = explode('.',$mobileThumbnailImg)[0];
                        $mobileThumbnailImgFormat = explode('.',$mobileThumbnailImg)[1];
                        ?>

                        <source type="image/webp" media="(max-width:767px)" srcset="<?= $mobileThumbnailImgNoFormat.'.webp' ?>" />
                        <source type="image/<?= $mobileThumbnailImgFormat ?>" media="(max-width:767px)" srcset="<?= $mobileThumbnailImg ?>" />
                <?php } ?>
                <img src="<?= $thumbnailImg ?>" alt="<?= $project ?>" width="1024" height="768">
            </picture>
        <?php }
        /* Image box - end */ ?>
    </div>
    <div class="col-6">
        <h3 class="projects__item--title"><?= $title ?></h3>
        <?php if ($client) { ?>
            <p class="projects__item--tagline">
            <?php
                if (!$academical || $academical === '') { echo 'client :: '; }
                echo '<b>'.$client.'</b>';
            } ?>
        <p class="projects__item--description"><?= $description ?></p>
        <span class="projects__item--tags"><?= $tags ?></span>
        <?php if ($link !== '#' && $link !== '') { ?>
            <a class="btn btn__secondary icon icon__link--<?php if ($linkExternal) { echo 'external'; } else { echo 'internal'; } ?>" href="<?= $link ?>" target="_blank">
                <?= $linkText ?>
            </a>
        <?php } ?>
    </div>
</div>

<?php
/* Clean variables after being used in their specific project */

/**** Image variables ****/
$thumbnailImg = '';
$bgImg = '';
$bgColor = '';
$mobileThumbnailImg = '';

/**** Content variables ****/
$title = '';
$academical = '';
$client = '';
$description = '';
$tags = '';

/**** Link variables ****/
$linkExternal = false;
$link = '#';
$linkText = 'Click me';
?>