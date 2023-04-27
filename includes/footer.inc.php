<!-- JavaScript scripts for components of this page -->
<script>
<?php
if ($pageComponents) {
    $pageComp = array_unique($pageComponents);
    foreach ($pageComp as $component) {
        include 'htdocs/components/'.$component.'/'.$component.'.js';
    }
}
?>
</script>
</body>
</html>