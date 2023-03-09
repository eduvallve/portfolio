<?php include "htdocs/common/utils.php"; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<title><?php echo($pageTitle); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Eduard Vallvé :: Portfolio :: <?php echo $pageTitle; ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link defer rel="shortcut icon" href="<?php echo $uri.'/htdocs/'; ?>favicon.ico" type="image/png" />
<?php include 'fonts.inc.php'; ?>
<link defer rel="stylesheet" href="<?php echo $uri.'/htdocs/common/'; ?>style.css">
<?php
if ($pageComponents) {
    $pageComp = array_unique($pageComponents);
    foreach ($pageComp as $component) {
        ?>
        <link defer rel="stylesheet" href="<?php echo $uri.'/htdocs/components/'.$component.'/'.$component.'.css'; ?>">
        <?php
    }
}
?>
</head>
<body onclick="void(0);" class="page__<?php echo $pageInclude; ?>">