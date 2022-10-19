<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo($pageTitle); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Eduard Vallvé :: Portfolio :: <?php echo $pageTitle; ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link defer rel="shortcut icon" href="<?php echo $uri.'/htdocs/'; ?>favicon.ico" type="image/png" />
<link defer rel="stylesheet" href="<?php echo $uri.'/htdocs/common/'; ?>style.css">
<style><?php
if ($pageComponents) {
    $pageComp = array_unique($pageComponents);
    foreach ($pageComp as $component) {
        include 'htdocs/components/'.$component.'/'.$component.'.css';
    }
}
?></style>
</head>
<body onclick="void(0);">