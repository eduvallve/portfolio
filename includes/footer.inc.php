<!-- JavaScript scripts for components of this page -->
<?php
if ($pageComponents) {
    $pageComp = array_unique($pageComponents);
    foreach ($pageComp as $component) {
        include 'htdocs/components/'.$component.'/'.$component.'.js.php';
    }
}
?>
</body>
</html>