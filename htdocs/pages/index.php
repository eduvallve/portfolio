<?php
if ($pageComponents) {
    foreach ($pageComponents as $component) {
        include 'htdocs/components/'.$component.'/'.$component.'.php';
    }
}
?>