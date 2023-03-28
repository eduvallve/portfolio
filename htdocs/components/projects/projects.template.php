<?php
// $bgImg is set as a constant used image
if (!$bgImg || $bgImg === '') {
    $bgImg = "uploads/2023/03/bg-002-1200.png";
}

if (!$linkText || $linkText === '') {
    $linkText = 'Click me';
}


// Set the path for the root directory.
$parts  = explode('/', $_SERVER[REQUEST_URI]);
array_pop($parts);
$uri = implode('/', $parts);

$uri = explode('/htdocs', $uri)[0];
?>

<div id="proj__<?php echo $project; ?>" class="col-12 cols projects__item">
    <div class="col-7 projects__item--img" <?php
        /* Image box - start */
        ($bgImg || $bgColor) ? $inline_style = true : $inline_style = false ;
        if ($inline_style) { echo 'style="'; }
        if ($bgImg) { echo 'background-image: url('.$uri.'/'.$bgImg.');'; }
        if ($bgColor) { echo 'background-color:'.$bgColor.';'; }
        if ($inline_style) { echo '"'; }
        ?>>
        <?php /* In case we do have a thumbanil image declared */
            if ($thumbnailImg) { ?>
            <picture>
                <?php /* Declaring thumbnail useful variables */
                    $thumbnailImg = $uri.'/'.$thumbnailImg;
                    $thumbnailImgNoFormat = explode('.',$thumbnailImg)[0];
                    $thumbnailImgFormat = explode('.',$thumbnailImg)[1];
                ?>

                <source type="image/webp" <?php
                    if ($mobileThumbnailImg) { ?>
                        media="(min-width:768px)"
                    <?php } ?> srcset="<?php echo $thumbnailImgNoFormat.'.webp'; ?>" />

                <source type="image/<?php echo $thumbnailImgFormat; ?>" <?php
                    if ($mobileThumbnailImg) { ?>
                        media="(min-width:768px)"
                    <?php } ?> media="(min-width:768px)" srcset="<?php echo $thumbnailImg; ?>" />

                <?php /* In case we do have a thumbanil image specific for mobiles */
                    if ($mobileThumbnailImg) {
                        /* Declaring mobile thumbnail useful variables */
                        $mobileThumbnailImg = $uri.'/'.$mobileThumbnailImg;
                        $mobileThumbnailImgNoFormat = explode('.',$mobileThumbnailImg)[0];
                        $mobileThumbnailImgFormat = explode('.',$mobileThumbnailImg)[1];
                        ?>

                        <source type="image/webp" media="(max-width:767px)" srcset="<?php echo $mobileThumbnailImgNoFormat.'.webp'; ?>" />
                        <source type="image/<?php echo $mobileThumbnailImgFormat; ?>" media="(max-width:767px)" srcset="<?php echo $mobileThumbnailImg; ?>" />
                <?php } ?>
                <img src="<?php echo $thumbnailImg; ?>" alt="<?php echo $project; ?>">
            </picture>
        <?php }
        /* Image box - end */ ?>
    </div>
    <div class="col-6">
        <h3 class="projects__item--title"><?php echo $title; ?></h3>
        <?php if ($client) { ?>
            <p class="projects__item--tagline">
            <?php
                if (!$academical || $academical === '') { echo 'client :: '; }
                echo '<b>'.$client.'</b>';
            } ?>
        <p class="projects__item--description"><?php echo $description; ?></p>
        <span class="projects__item--tags"><?php echo $tags; ?></span>
        <?php if ($link !== '#' && $link !== '') { ?>
            <a class="btn btn__secondary icon icon__link--<?php if ($linkExternal) { echo 'external'; } else { echo 'internal'; } ?>" href="<?php echo $link; ?>" target="_blank">
                <?php echo $linkText; ?>
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