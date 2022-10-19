<?php
if ($pageComponents) {
    $pageComp = array_unique($pageComponents);
    foreach ($pageComp as $component) {
        ?>
        <script src="<?php echo $uri.'/htdocs/components/'.$component.'/'.$component.'.js'; ?>"></script>
        <?php
    }
}
?>
</body>
</html>