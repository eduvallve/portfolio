<?php
include 'htdocs/common/utils.php';

$component = "otherWorks";
$compRoute = "/htdocs/components/".$component."/".$component."Repo/".$work."/uploads/";

$uri = explode('/htdocs', $uri)[0];

($link && $link !== '') ? $tag = 'a' : $tag = 'div';
?>

<<?= $tag ?> class="<?= $component ?>__list--item" <?= 'href="'.$uri.$link.'" target="_blank"' ?>>
    <span class="<?= $component ?>__list--item--image" style="
        <?php if ($bgImg) { ?>
            background-image: url('<?= $uri.$compRoute.$bgImg ?>')
        <?php } else { ?>
            background-color: white;
        <?php } ?>
    "></span>
    <span class="<?= $component ?>__list--item--content">
        <span class="<?= $component ?>__list--item--title"><?= $title ?></span>
        <span class="<?= $component ?>__list--item--description"><?= $description ?></span>
    </span>
</<?= $tag ?>>

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
$link = '';
// $linkText = 'Click me';
?>