<?php
// Set the path for the root directory.
$parts  = explode('/', $_SERVER[REQUEST_URI]);
array_pop($parts);
$uri = implode('/', $parts);

$component = "otherWorks";
$compRoute = "/htdocs/components/".$component."/".$component."Repo/".$work."/uploads/";

$uri = explode('/htdocs', $uri)[0];
?>

<div class="<?= $component ?>__list--item">
    <div class="<?= $component ?>__list--item--image" style="
        <?php if ($bgImg) { ?>
            background-image: url('<?= $uri.$compRoute.$bgImg ?>')
        <?php } else { ?>
            background-color: white;
        <?php } ?>
    "></div>
    <div class="<?= $component ?>__list--item--content">
        <div class="<?= $component ?>__list--item--title"><?= $title; ?></div>
        <div class="<?= $component ?>__list--item--description"><?= $description; ?></div>
    </div>
</div>

<?php
/* Clean variables after being used in their specific work */

// /**** Image variables ****/
// $thumbnailImg = '';
$bgImg = '';
// $bgColor = '';
// $mobileThumbnailImg = '';

// /**** Content variables ****/
$title = '';
// $academical = '';
// $client = '';
$description = '';
// $tags = '';

// /**** Link variables ****/
// $linkExternal = false;
// $link = '#';
// $linkText = 'Click me';
?>